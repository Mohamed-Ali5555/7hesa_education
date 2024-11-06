<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use DB;
class HomeController extends Controller
{   

    public function dashboard()
    {
        return view('admin.pages.home');
    }

    public function payments(){
        $payments = Payment::get();
        $totalStudents = DB::table('payments')->distinct('student_id')->count('student_id');
        $totalAmount = DB::table('payments')->sum('amount');
        
        $results = DB::table('teacher_packages')
        ->join('payments','teacher_packages.id','=','payments.package_id')
        ->join('teachers','teacher_packages.added_by','=','teachers.id')
      
        ->join('admin_packages', 'teachers.admin_package_id', '=', 'admin_packages.id') // الانضمام إلى جدول admin_packages

        ->select('teacher_packages.name as package_name','teachers.name as teacher_name',
        'admin_packages.price as admin_package_price', // إضافة السعر من جدول admin_package_price
        'admin_packages.name as admin_package_name', // إضافة السعر من جدول admin_package_price

        
        DB::raw('COUNT(DISTINCT payments.student_id) as total_students '),
        DB::raw('SUM(payments.amount) as total_amount')
        )
        ->groupBy('teacher_packages.id', 'teacher_packages.name',
         'teachers.name','admin_packages.price','admin_packages.name')
        ->get();
      


        return view('admin.pages.Payment.payment_details',compact('payments','results','totalAmount','totalStudents'));
    }
}
