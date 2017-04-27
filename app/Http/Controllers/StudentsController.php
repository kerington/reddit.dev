<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = new \App\Models\Student();
        $student->first_name = $request->first_name;
        $student->description = $request->description;
        $student->subscribed = $request->subscribed;
        $student->school_name = $request->school_name;
        $student->save();

        return resirect()->action('StudentController@index');


    }
    public function edit($id)
    {
        return view('students.edit');
    }
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Deleting post with ID ' . $id;
    }
}