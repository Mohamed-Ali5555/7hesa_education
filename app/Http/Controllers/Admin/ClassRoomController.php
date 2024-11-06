<?php


namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClassroom;

class ClassRoomController extends Controller
{

    public function index()
    {

        $My_Classes = Classroom::get();
        $grades = Grade::get();
        return view('admin.pages.My_Classes.My_Classes', compact('My_Classes', 'grades'));
    }



    public function store(StoreClassroom $request)
    {

        $classes = $request->List_Classes;

        try {
            $validated = $request->validated();
            foreach ($classes as $class) {
                Classroom::create([
                    'Name_Class' => ['en' => $class['Name_class_en'], 'ar' => $class['Name']],
                    'grade_id' => $class['grade_id'],
                ]);
            }

            toastr()->success(trans('messages.success'));
            return to_route('admin.classrooms.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }



    public function update(Request $request)
    {

        try {
            $classrooms = Classroom::findOrFail($request->id);

            $classrooms->update([
                'Name_Class' => ['ar' => $request->Name, 'en' => $request->Name_en],
                'grade_id' => $request->grade_id,
            ]);
            toastr()->success(trans('messages.Update'));
            return to_route('admin.classrooms.index');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {

        $classrooms = Classroom::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return to_route('admin.classrooms.index');

    }


    public function delete_all(Request $request)
    {
        $delete_all_id = explode(",", $request->delete_all_id);

        Classroom::whereIn('id', $delete_all_id)->delete();
        toastr()->error(trans('messages.Delete'));
        return to_route('admin.classrooms.index');
    }


    public function Filter_Classes(Request $request)
    {
        $grades = Grade::get();
        $Search = Classroom::where('grade_id', $request->grade_id)->get();
        return view('admin.pages.My_Classes.My_Classes', compact('grades', 'Search'));

    }


}

?>