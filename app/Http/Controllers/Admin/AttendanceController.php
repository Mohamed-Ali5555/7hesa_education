<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\AttendanceRepositoryInterface;

class AttendanceController extends Controller
{

    protected $attendance;

    public function __construct(AttendanceRepositoryInterface $attendance)
    {
        $this->attendance = $attendance;
    }


    public function index()
    {
        return $this->attendance->index();
    }



    public function store(Request $request)
    {
        return $this->attendance->store($request);
    }


    public function show($id)
    {
        return $this->attendance->show($id);
    }

    public function edit($id)
    {
        // return $this->attendance->edit($id);

    }


    public function update(Request $request, $id)
    {
               // return $this->attendance->update($id);

    }


    public function destroy($id)
    {
        // return $this->attendance->destroy($id);

        }
}
