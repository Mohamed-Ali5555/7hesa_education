<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin_package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeachers;
use App\Interfaces\TeacherRepositoryInterface;

class PackageController extends Controller
{
  
    public function index()
    {
        $packages = Admin_package::where('added_by',auth()->user()->id)->get();
        return view('admin.pages.packages.index', compact('packages'));

    }


    public function create()
    {
        // $grades = Grade::get();
        // $features = Feature::get();
        // dd(
        //     $features
        // );
        return view('admin.pages.packages.create');
    }


    public function store(Request $request)
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
            // 'grade_id'=> 'required',
            // 'image' => 'required|mimes:png,jpeg,jpg|max:2000',

        ]);


        $imageNew = '';
        if($request->hasFile('image')){
            $img = $request->image;
            $imageNew= time().'.'.rand(0,1000).'.'.$img->extension();
            $img->move(public_path('assets/images/uploads') , $imageNew);

        }

        $package = Admin_package::create([
            'name' => $request->name,
            'description' => $request->description,
            'start_at' => $request->start_at,
            // 'grade_id' => $request->grade_id,
            // 'classroom_id' => $request->classroom_id,

            'end_at' => $request->end_at,
            'package_type' => $request->package_type,
            'price' => $request->price,
            'status' => $request->status,
            'added_by' => auth()->user()->id,
            'image' =>$imageNew,
        ]);
        if($package){
            return redirect()->route('admin.package.index')->with('success','package added success');
        }else{
            return redirect()->back()->with('error','there is error');
        }
        // dd(
        //     $request->all()
        // );
        //
    }

    public function show(Plan $package)
    {
        //
    }


    public function edit($id)
    {
        // $grades = Grade::get();
        // $class_rooms = Classroom::get();

       $package = Admin_package::findOrFail($id);
    //    return $package->end_at;
    //    return $package->class_room->Name_Class;
       return view('admin.pages.packages.edit', compact('package'));
 
    }

    public function update(Request $request, $id)
    {
        $package = Admin_package::findOrFail($id);
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
            // 'grade_id' => $request->grade_id,
            // 'classroom_id' => $request->classroom_id,
            'end_at' => $request->end_at,
            'package_type' => $request->package_type,
            'price' => $request->price,
            'status' => $request->status,
            'added_by' => auth()->user()->id,
            'image' => $imageNew, // Use the updated or existing image path
        ]);
    
        // $currentDate = Carbon::now();
    
        // // Check if the start or end dates have changed
        // $start_at_Changed = $package->start_at != $oldStart_at;
        // $end_at_Changed = $package->end_at != $oldend_at;
    
        // if (
        //     ($start_at_Changed && $package->start_at > $currentDate) ||
        //     ($end_at_Changed && $package->end_at <= $currentDate)
        // ) {
        //     // If the conditions are met, delete all subscriptions for this package
        //     Payment::where('package_id', $id)->delete();
        // }
    
        return redirect()->route('admin.package.index')->with('success', 'Package updated successfully.');
    }
    

    public function destroy( $id)
    {
      
        $package = Admin_package::findOrFail($id);
        if(empty($package)){
            return redirect()->back()->with(['error'=>'package is empty']);
        }
        $delete = $package->delete();
        return redirect()->back()->with('success', 'Package updated successfully.');

    }

}
