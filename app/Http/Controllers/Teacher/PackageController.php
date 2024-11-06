<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Grade;
use App\Models\package;
use App\Models\Classroom;
use App\Models\Payment;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\PlanRequest;
use Laravelcm\Subscriptions\Models\Feature;

class PackageController extends Controller
{
    public function index()
    {
        $packages = package::where('added_by',auth('teacher')->user()->id)->get();
        return view('teacher.pages.packages.index', compact('packages'));

    }


    public function create()
    {
        $grades = Grade::get();
        // $features = Feature::get();
        // dd(
        //     $features
        // );
        return view('teacher.pages.packages.create', compact('grades'));
    }


    public function store(PlanRequest $request)
    {
        // return $request->all();
    

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_at' => 'required|date_format:Y-m-d\TH:i|after_or_equal:today',
            'end_at' => 'required|date_format:Y-m-d\TH:i|after:start_at',
            'package_type' => 'required',
            'price' => 'required|numeric',
            'status' => 'required',
            'grade_id'=> 'required',
            // 'image' => 'required|mimes:png,jpeg,jpg|max:2000',

        ]);


        $imageNew = '';
        if($request->hasFile('image')){
            $img = $request->image;
            $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
            $img->move(public_path('assets/images/uploads') , $imageNew);

        }

        $package = package::create([
            'name' => $request->name,
            'description' => $request->description,
            'start_at' => $request->start_at,
            'grade_id' => $request->grade_id,
            'classroom_id' => $request->classroom_id,

            'end_at' => $request->end_at,
            'package_type' => $request->package_type,
            'price' => $request->price,
            'status' => $request->status,
            'added_by' => auth('teacher')->user()->id,
            'image' =>$imageNew,
        ]);
        if($package){
            return redirect()->route('teacher.package.index')->with('success','package added success');
        }else{
            return redirect()->back()->with('error','there is error');
        }
        // dd(
        //     $request->all()
        // );
        //
    }

    public function show(TeacherPlan $package)
    {
        //
    }


    public function edit($id)
    {
        $grades = Grade::get();
        $class_rooms = Classroom::get();

       $package = Package::findOrFail($id);
    //    return $package->end_at;
    //    return $package->class_room->Name_Class;
       return view('teacher.pages.packages.edit', compact('package','grades','class_rooms'));
 
    }

    public function update(PlanRequest $request, $id)
    {
        $package = Package::findOrFail($id);
        if (empty($package)) {
            return redirect()->back()->with(['error' => 'Data is empty']);
        }
    
        $oldStart_at = $package->start_at;
        $oldend_at = $package->end_at;
        $oldphotoPath = $package->image;
    
        $imageNew = $oldphotoPath; // Default to the old image path
    
        if ($request->hasFile('image')) {
            $validated = $request->validate([
                'image' => 'required|mimes:png,jpg,jpeg|max:2000',
            ]);
    
            $img = $request->file('image');
            $imageNew = time() . '.' . rand(0, 1000) . '.' . $img->extension();
    
            $img->move(public_path('assets/images/uploads'), $imageNew);
    
            // Remove old image if it exists
            if (!empty($oldphotoPath) && file_exists(public_path('assets/images/uploads/' . $oldphotoPath))) {
                unlink(public_path('assets/images/uploads/' . $oldphotoPath));
            }
        }
    
        // Update the package with other fields
        $update = $package->update([
            'name' => $request->name,
            'description' => $request->description,
            'start_at' => $request->start_at,
            'grade_id' => $request->grade_id,
            'classroom_id' => $request->classroom_id,
            'end_at' => $request->end_at,
            'package_type' => $request->package_type,
            'price' => $request->price,
            'status' => $request->status,
            'added_by' => auth('teacher')->user()->id,
            'image' => $imageNew, // Use the updated or existing image path
        ]);
    
        $currentDate = Carbon::now();
    
        // Check if the start or end dates have changed
        $start_at_Changed = $package->start_at != $oldStart_at;
        $end_at_Changed = $package->end_at != $oldend_at;
    
        if (
            ($start_at_Changed && $package->start_at > $currentDate) ||
            ($end_at_Changed && $package->end_at <= $currentDate)
        ) {
            // If the conditions are met, delete all subscriptions for this package
            Payment::where('package_id', $id)->delete();
        }
    
        return redirect()->route('teacher.package.index')->with('success', 'Package updated successfully.');
    }
    

    public function destroy( $id)
    {
      
        $package = Package::findOrFail($id);
        if(empty($package)){
            return redirect()->back()->with(['error'=>'package is empty']);
        }
        $delete = $package->delete();
        return redirect()->back()->with('success', 'Package updated successfully.');

    }



}
