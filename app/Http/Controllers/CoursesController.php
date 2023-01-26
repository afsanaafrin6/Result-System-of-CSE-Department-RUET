<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use App\Http\Requests;
use App\Http\Controllers\Controller; 
use App\Course;
class CoursesController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
          $courses=Course::where('code',$code)->get();
          //dd($courses);
         return view('users.course',['courses'=>$courses->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        $courses=Course::where('code',$code)->get();
        //dd($courses);
        return view('users.course',['courses'=>$courses->first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $courses=Course::find($id);
         //dd($courses);
        //$courses->code=$request->get('code');
        $courses->semester=$request->get('semester');
        $courses->section=$request->get('section');

         $courses->course1=$request->get('course1');
          $courses->course2=$request->get('course2');
           $courses->course3=$request->get('course3');
            $courses->course4=$request->get('course4');
            
          
        $courses->save();
        return redirect()->route('course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function course()
    {
       return view('users.shome');
    }
}
