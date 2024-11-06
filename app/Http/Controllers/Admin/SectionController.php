<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSections;

class SectionController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $grades = Grade::with(['Sections.teachers'])->get();
    // dd(
    //   $grades
    // );
    $list_grades = Grade::get();
    $teachers = Teacher::get();
    return view('admin.pages.Sections.Sections',compact('grades','list_grades','teachers'));

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(StoreSections $request)
  {

    try {

      $validated = $request->validated();
      $Sections = new Section();
      $Sections->name = ['ar' => $request->name_Ar, 'en' => $request->name_En];
      $Sections->grade_id = $request->grade_id;
      $Sections->class_id = $request->class_id;
      $Sections->Status = 1;
      $Sections->save();
      $Sections->teachers()->attach($request->teacher_id);
      toastr()->success(trans('messages.success'));

      return to_route('admin.Sections.index');
  }

  catch (\Exception $e){
      return redirect()->back()->withErrors(['error' => $e->getMessage()]);
  }

  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(StoreSections $request)
  {

    try {
      $validated = $request->validated();
      $Sections = Section::findOrFail($request->id);

      $Sections->name = ['ar' => $request->name_Ar, 'en' => $request->name_En];
      $Sections->grade_id = $request->grade_id;
      $Sections->class_id = $request->class_id;

      if(isset($request->Status)) {
        $Sections->Status = 1;
      } else {
        $Sections->Status = 2;
      }


       // update pivot tABLE
        if (isset($request->teacher_id)) {
            $Sections->teachers()->sync($request->teacher_id);
        } else {
            $Sections->teachers()->sync(array());
        }


      $Sections->save();
      toastr()->success(trans('messages.Update'));

      return to_route('admin.Sections.index');
  }
  catch
  (\Exception $e) {
      return redirect()->back()->withErrors(['error' => $e->getMessage()]);
  }

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(request $request)
  {

    Section::findOrFail($request->id)->delete();
    toastr()->error(trans('messages.Delete'));
    return to_route('admin.Sections.index');

  }

  public function getclasses($id)
    {
        $list_classes = Classroom::where("grade_id", $id)->pluck("Name_Class", "id");

        return $list_classes;
    }

}
