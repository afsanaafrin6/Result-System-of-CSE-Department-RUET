<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller; 
use App\Teachercourse;


class TeachercoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.coursecreate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.teachercoursecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data= $request->except('_token');
        // $ctcount=$data['num_rows'];
        // $code=$data['code'];
        // $section=$data['section'];
        
        // //dd($ctcount);
        // for($i=0;$i<$ctcount;$i++){
            
        //     $tss = new Teachercourse;
        //     $tss->field=$data['field'];

        //     $tss->code=$data['code'];
        //     $tss->semester=$data['semester'];
        //     $tss->section=$data['section'];
        //     $tss->course1=$data['course1'][$i];
           
        //     $tss->save();
        //   }  
        // // $data = $request->only('field','code','semester','section','course1');
        // $tcourses=Teachercourse::where('code',$code)->where('section',$section)->get();
                
        // // $tcourses = Teachercourse::create($data);
        // if($tcourses[0]->field=='s'){
        //     // dd($user);
            
        //     return redirect()->route('teachercourseshow',$tcourses[0]->code);
             
        // }
        // return back()->withInput();
        $rows = $request->input('rows');
        
         foreach ($rows as $row)
{
    $charges[] = [
        'field' => $row['field'],
        
        'code' => $row['code'],
        'semester' =>  $row['semester'],
        'section' => $row['section'],
        'course1' => $row['course1'],
    ];
    $code=$row['code'];
}

    Teachercourse::insert($charges);
    $tcourses=Teachercourse::where('code',$code)->get();
    if($tcourses){
        //     // dd($user);
        
           return redirect()->route('teachercourseshow',$tcourses[0]->code);
             
        }
        // return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $courses=Teachercourse::where('code',$code)->first();
          //dd($courses);
        if($courses==null)
         {return view('users.home');}
        else{
            $tcourses=Teachercourse::where('code',$code)->get();
        $field=$tcourses[0]->field;
            if($field=="t")
             {return view('users.teachercourse',['tcourses'=>$tcourses]);}
            else
                {return view('users.course',['tcourses'=>$tcourses]);}
    }
    
        
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tcourses=Teachercourse::where('id',$id)->get();
          //dd($courses);
        $field=$tcourses[0]->field;
            if($field=="t")
            {return view('users.teachercourseedit',['tcourses'=>$tcourses->first()]);}
        else
                {return view('users.courseedit',['tcourses'=>$tcourses->first()]);}
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
          $tcourses=Teachercourse::find($id);
         //dd($courses);
        //$courses->code=$request->get('code');
        $tcourses->semester=$request->get('semester');
        $tcourses->section=$request->get('section');

         $tcourses->course1=$request->get('course1');
          
            
          
        $tcourses->save();
        return redirect()->route('teachercourseshow',$tcourses->code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tcourses=Teachercourse::find($id);
        // dd($tcourses);
        Teachercourse::destroy($id);
  
        // return redirect()->route('teachercourse');
        return redirect()->route('teachercourseshow',$tcourses->code);
    }
     public function teachercourse()
    {
       return view('users.teachercourse');
    }

     public function ctshow($code)
    {
        $tcourses=Teachercourse::where('code',$code)->get();
          //dd($courses);
       
         $field=$tcourses[0]->field;
            if($field=="t")
            {  return view('users.ctmarks',['tcourses'=>$tcourses]);
                    //return view('users.home',['tcourses'=>$tcourses]);
    }
        else
                {  return view('users.studentctmarks',['tcourses'=>$tcourses]);
                    //return view('users.shome',['tcourses'=>$tcourses]);
        }
    }
    public function studentattendance($code)
    {
        $tcourses=Teachercourse::where('code',$code)->get();
          //dd($courses);
       
         $field=$tcourses[0]->field;
            if($field=="t")
            {  //return view('users.teacherattendance',['tcourses'=>$tcourses]);
                    //return view('users.home',['tcourses'=>$tcourses]);
    }
        else
                {  return view('users.studentattendance',['tcourses'=>$tcourses]);
                    //return view('users.shome',['tcourses'=>$tcourses]);
        }
    }

    public function ct($id)
    {
         $tcourses=Teachercourse::find($id);
        $tcourse=Teachercourse::where(['section'=>$tcourses->section,
                                        'course1'=>$tcourses->course1,
                                        'field'=>"s"

    ])->orderby('code','asc')->get();
          //dd($courses);
         return view('users.ct',['tcourses'=>$tcourse]);
    }
    public function mark($id)
    {
         $tcourses=Teachercourse::find($id);
        $tcourse=Teachercourse::where(['section'=>$tcourses->section,
                                        'course1'=>$tcourses->course1,
                                        'field'=>"s"

    ])->orderby('code','asc')->get();
          //dd($courses);
         return view('users.marks',['tcourses'=>$tcourse]);
    }
   public function attendance($code)
    {
        $tcourses=Teachercourse::where('code',$code)->get();
          //dd($courses);
        // if($tcourses==null){return view('users.attendance');}
        //  else
         return view('users.attendance',['tcourses'=>$tcourses]);
        
}
public function attend($id)
    {
         $tcourses=Teachercourse::find($id);
        $tcourse=Teachercourse::where(['section'=>$tcourses->section,
                                        'course1'=>$tcourses->course1,
                                        'field'=>"s"

    ])->orderby('code','asc')->get();
          //dd($courses);
         return view('users.attendancestudent',['tcourses'=>$tcourse]);
    }

    
    public function teacherattendanceshow($code)
    {
        $tcourses=Teachercourse::where('code',$code)->get();
          //dd($courses);
        // if($tcourses==null){return view('users.attendance');}
        //  else
         return view('users.attendanceteacher',['tcourses'=>$tcourses]);
        
}

// public function studentcgpa($code)
//     {
//         $courses=Teachercourse::where('code',$code)->first();
//           //dd($courses);
//         if($courses==null)
//          {return view('users.home');}
//         else{
//             $tcourses=Teachercourse::where('code',$code)->get();
//         $field=$tcourses[0]->field;
//             if($field=="s")
//              {//return view('users.teachercourse',['tcourses'=>$tcourses]);
//                 return redirect()->route('teachercourseshow',$tcourses->code,$tcourses->semester);

//      }
            
//     }
    
        
// }

 
}