<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\SubjectRepositoryInterface;

class SubjectController extends Controller
{

    protected $Subject;

    public function __construct(SubjectRepositoryInterface $Subject)
    {
        $this->Subject = $Subject;
    }

    public function index()
    {
        return $this->Subject->index();
    }


    public function create()
    {
        return $this->Subject->create();
    }


    public function store(Request $request)
    {
        return $this->Subject->store($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return $this->Subject->edit($id);
    }

    public function update(Request $request)
    {
        return $this->Subject->update($request);
    }

    public function destroy(Request $request)
    {
        return $this->Subject->destroy($request);
    }
}
