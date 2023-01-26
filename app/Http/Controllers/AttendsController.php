<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller; 
use App\Attend;
use Carbon\Carbon;
use DB;
class AttendsController extends Controller
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
        $data= $request->except('_token');
        $code=$data['code'][0];
        $ctcount=$data['num_rows'];
        $course1=$data['course1'];
        $section=$data['section'];
        $semester=$data['semester'];
        $cycle=$data['cycle'][0];
        $day=$data['day'][0];

         // $cur_date=date('y-m-d');
        $cur_date=$data['date'][0];
        // $attendss=Attend::where('date','>=',Carbon::today())->where('course1',$course1)->where('section',$section)->first();
        $attendss=Attend::where('date',$data['date'][0])->where('course1',$course1)->where('section',$section)->first();
         //$records=DB::table('attends')->select(DB::raw('*'))->whereRaw('Date(date)=CURDATE()')->get();
        if($attendss==null)
        {for($i=0;$i<$ctcount;$i++){
            
            $tss = new Attend;
            $tss->code=$data['code'][$i];
            $tss->semester=$data['semester'];
            $tss->section=$data['section'];
            $tss->course1=$data['course1'];
           $tss->cycle=$cycle;
           $tss->day=$day;

            $tss->date=$cur_date;
             $tss->attendance=$data['attendance'][$i];
            
            $tss->save();
                              }
    
              }
    else
    {
        for($i=0;$i<$ctcount;$i++){
           // $tss=Attend::where('date','>=',Carbon::today())->where('code',$data['code'][$i])->where('course1',$course1)->where('section',$section)->first();
            $tss=Attend::where('date',$data['date'][0])->where('code',$data['code'][$i])->where('course1',$course1)->where('section',$section)->first();
            
            $tss->code=$data['code'][$i];
            $tss->semester=$data['semester'];
            $tss->section=$data['section'];
            $tss->course1=$data['course1'];
          $tss->cycle=$cycle;
           $tss->day=$day;
          
            $tss->date=$cur_date;
             $tss->attendance=$data['attendance'][$i];
            
            $tss->save();
    }
  }
  $attends=Attend::where('course1',$course1)->where('section',$section)->where('semester',$semester)->get();
                return view('users.attendanceshow',['attends'=>$attends]);       
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    public function attendances($course1,$section,$id)
    {
        $atts=Attend::where('course1',$course1)->where('section',$section)->first();
          //dd($courses);
        if($atts==null){
          return redirect()->route('teachercourseattendance',$id);
            // return view('users.ct');
        }

         else
             { 
                  //$tcourses=Attend::where('course1',$course1)->where('section',$section)->get();
                // return view('users.attendancestudent',['tcourses'=>$tcourses]);
                 return redirect()->route('teachercourseattendance',$id);

    }
}
public function courseattends($course1,$code,$id)
    {
        $atts=Attend::where('course1',$course1)->where('code',$code)->first();
          //dd($courses);
        if($atts==null){
          //return redirect()->route('teachercourseattendance',$id);
            // return view('users.ct');
            return view('users.studentattendanceshow',['attends'=>$atts]);
        }

         else
             { 
                 $attend=Attend::where('course1',$course1)->where('code',$code)->get();
                $attends=DB::table("attends")->select(DB::raw('code,COUNT(*) AS codecount'))->where('code',$code)->whereraw('attendance=1')->groupby('code')->get();
                $abss=DB::table("attends")->select(DB::raw('code,COUNT(*) AS abcount'))->where('code',$code)->whereraw('attendance=0')->groupby('code')->get();
                $total=DB::table("attends")->distinct()->get(['date']);
                $total_count=$total->count();
                
                $percentage=($attends[0]->codecount*100)/$total_count;
               // dd($percentage);
                return view('users.studentattendanceshow',['attends'=>$attends,'attend'=>$attend,'abss'=>$abss,'total_count'=>$total_count,'percentage'=>$percentage]);

    }
}
public function attend($course1,$section,$id)
    {
        $attends=Attend::where('course1',$course1)->where('section',$section)->first();
          //dd($courses);
        if($attends==null){
          //return redirect()->route('teachercourseattendance',$id);
            // return view('users.ct');
            return view('users.attendanceshow',['attends'=>$attends]);
        }

         else
             { 
                 $attends=Attend::where('course1',$course1)->where('date','>=',Carbon::today())->get();
                $attend=DB::table("attends")->select(DB::raw('date,COUNT(*) AS datecount'))->where('date','>=',Carbon::today())->whereraw('attendance=1')->groupby('date')->get();
                //dd($attends);
                $abss=DB::table("attends")->select(DB::raw('date,COUNT(*) AS abcount'))->where('date','>=',Carbon::today())->whereraw('attendance=0')->groupby('date')->get();
                $total=DB::table("attends")->distinct()->get(['date']);
                $total_count=$total->count();
                
              
               // dd($percentage);
                return view('users.attendanceshow',['attends'=>$attends,'attend'=>$attend,'abss'=>$abss,'total_count'=>$total_count]);

     }
            }

            public function showdate(Request $request,$course1)
    {
        
             $users = $request->except('_token');
             $date=Carbon::parse($request->date);
            // dd($date);
                 $attends=Attend::where('course1',$course1)->where('date',$date)->get();
                
                return view('users.showdate',['attends'=>$attends]);


            }
   
     public function showcode(Request $request,$course1)
    {
        
             $users = $request->except('_token');
             $code=$request->code;
            // dd($date);
                 $attends=Attend::where('course1',$course1)->where('code',$code)->get();
                
                return view('users.showdate',['attends'=>$attends]);


            }

    }