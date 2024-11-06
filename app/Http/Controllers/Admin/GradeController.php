<?php


namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGrades;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    public function index()
    {
      $grades = Grade::get();
      return view('admin.pages.Grades.Grades', compact('grades'));
    }


  public function store(StoreGrades $request)
  {

    try {
      $validated = $request->validated();
      $Grade = Grade::create([
        'Name' => ['en' => $request->Name_en, 'ar' => $request->Name],
        'Notes' => $request->Notes,
      ]);

      toastr()->success(trans('messages.success'));
      return redirect()->route('admin.grades.index');
    } catch (Exception $e) {
      return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }


  }


  public function update(StoreGrades $request)
  {
    try {

      $validated = $request->validated();
      $grades = Grade::findOrFail($request->id);
      $grades->update([
        $grades->Name = ['ar' => $request->Name, 'en' => $request->Name_en],
        $grades->Notes = $request->Notes,
      ]);
      toastr()->success(trans('messages.Update'));
      return redirect()->route('admin.grades.index');
    } catch (Exception $e) {
      return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
{
    // Check if any classrooms are associated with the grade
    $hasClassrooms = Classroom::where('grade_id', $request->id)->exists();

    if (!$hasClassrooms) {
        // If no classrooms are associated, delete the grade
        Grade::findOrFail($request->id)->delete();
        toastr()->success(trans('messages.Delete'));
    } else {
        // If classrooms are associated, show an error
        toastr()->error(trans('grades_trans.delete_Grade_Error'));
    }

    // Redirect back to the grades index page
    return redirect()->route('admin.grades.index');




  }

}
