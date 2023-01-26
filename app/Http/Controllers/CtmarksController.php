<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller; 
use App\Ctmark;
use App\Attend;
use DB;
class CtmarksController extends Controller
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
    public function markcreate(Request $request)
    {
        
         //$data = $request->only('code','semester','section','course1','ct1','ct2','ct3','ct4','average');
        $data= $request->except('_token');
        $ctcount=$data['num_rows'];
        $course1=$data['course1'];
        $section=$data['section'];

        //dd($ctcount);
        for($i=0;$i<$ctcount;$i++){
            
            $tss = new Ctmark;
            $tss->code=$data['course_code'][$i];
            $tss->semester=$data['semester'];
            $tss->section=$data['section'];
            $tss->course1=$data['course1'];
            
             $tss->boardviva=$data['boardviva'][$i];
            $tss->exam=$data['exam'][$i];
             $tss->average=$data['average'][$i];
            // $tss1=array($data['boardviva'][$i],$data['exam'][$i],$data['average'][$i]);
           //  sort($tss1);
            //$value=$tss1[1]+$tss1[2]+$tss1[3];
              
            $atts=Attend::where('course1',$course1)->where('code',$data['course_code'][$i])->first();
            $total=DB::table("attends")->distinct()->get(['date']);
                $total_count=$total->count();
                $attends=DB::table("attends")->select(DB::raw('code,COUNT(*) AS codecount'))->where('code',$data['course_code'][$i])->whereraw('attendance=1')->groupby('code')->get();
                $total=($attends[0]->codecount*100)/$total_count;

                if($total>=90){$total=8;}
                elseif ($total>=85 && $total<90 ) { $total=7;}
                elseif ($total>=80 && $total<85 ) { $total=6;}
                elseif ($total>=70 && $total<80 ) { $total=5;}
                elseif ($total>=60 && $total<70 ) { $total=4;}
                elseif ($total<60 ) { $total=0;}
                 $value= $data['boardviva'][$i]+$data['exam'][$i]+$data['average'][$i]+$total;
                
            $tss->totalmarks=$value;
               $tss->attendmark=$total; 
            $tss->save();
            
        }

         $cts=Ctmark::where('course1',$course1)->where('section',$section)->get();
                return view('users.markedit',['cts'=>$cts]); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         //$data = $request->only('code','semester','section','course1','ct1','ct2','ct3','ct4','average');
        $data= $request->except('_token');
        $ctcount=$data['num_rows'];
        $course1=$data['course1'];
        $section=$data['section'];

        //dd($ctcount);
        for($i=0;$i<$ctcount;$i++){
            
            $tss = new Ctmark;
            $tss->code=$data['course_code'][$i];
            $tss->semester=$data['semester'];
            $tss->section=$data['section'];
            $tss->course1=$data['course1'];
            $tss->ct1=$data['ct1'][$i];
            $tss->ct2=$data['ct2'];
            $tss->ct3=$data['ct3'];
            $tss->ct4=$data['ct4'];
            // $tss->boardviva=$data['boardviva'][$i];
            // $tss->exam=$data['exam'][$i];
            $tss1=array($data['ct1'][$i],$data['ct2'],$data['ct3'],$data['ct4']);
            sort($tss1);
            $value1=($tss1[1]+$tss1[2]+$tss1[3])/3;
           $tss->average=$value1;
            
            $tss->save();
            
        }

         $cts=Ctmark::where('course1',$course1)->where('section',$section)->get();
                return view('users.ctedit',['cts'=>$cts]); 
        
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
    public function update(Request $request)
    {
          $data= $request->except('_token');
        $ctcount=$data['num_rows'];
        $course1=$data['course1'];
        $section=$data['section'];
    
        for($i=0;$i<$ctcount;$i++){
             $tss=Ctmark::find($data['id'][$i]);
              
             $tss->code=$data['ct_code'][$i];
            $tss->semester=$data['semester'];
            $tss->section=$data['section'];
            $tss->course1=$data['course1'];
            $tss->ct1=$data['ct1'][$i];
            $tss->ct2=$data['ct2'][$i];
            $tss->ct3=$data['ct3'][$i];
            $tss->ct4=$data['ct4'][$i];
            $tss->boardviva=$data['boardviva'];
            $tss->exam=$data['exam'];
            $tss1=array($data['ct1'][$i],$data['ct2'][$i],$data['ct3'][$i],$data['ct4'][$i]);
            sort($tss1);
            $value1=($tss1[1]+$tss1[2]+$tss1[3])/3;
            //dd($tss1);
           $tss->average=$value1;
           //$value= $data['boardviva']+$data['exam']+$data['average'][$i];
            //$tss->totalmarks=$value;
            $atts=Attend::where('course1',$course1)->where('code',$data['ct_code'][$i])->first();
            $total=DB::table("attends")->distinct()->get(['date']);
                $total_count=$total->count();
                $attends=DB::table("attends")->select(DB::raw('code,COUNT(*) AS codecount'))->where('code',$data['ct_code'][$i])->whereraw('attendance=1')->groupby('code')->get();
                $total=($attends[0]->codecount*100)/$total_count;

                if($total>=90){$total=8;}
                elseif ($total>=85 && $total<90 ) { $total=7;}
                elseif ($total>=80 && $total<85 ) { $total=6;}
                elseif ($total>=70 && $total<80 ) { $total=5;}
                elseif ($total>=60 && $total<70 ) { $total=4;}
                elseif ($total<60 ) { $total=0;}
                 $value= $data['boardviva']+$data['exam']+$value1+$total;
                
            $tss->totalmarks=$value;
               $tss->attendmark=$total;
            
            $tss->save();
               
        }
        $cts=Ctmark::where('course1',$course1)->where('section',$section)->get();
                return view('users.ctedit',['cts'=>$cts]); 
    }


    public function markupdate(Request $request)
    {
          $data= $request->except('_token');
        $ctcount=$data['num_rows'];
        $course1=$data['course1'];
        $section=$data['section'];
    
        for($i=0;$i<$ctcount;$i++){
             $tss=Ctmark::find($data['id'][$i]);
              
             $tss->code=$data['ct_code'][$i];
            $tss->semester=$data['semester'];
            $tss->section=$data['section'];
            $tss->course1=$data['course1'];
            // $tss->ct1=$data['ct1'][$i];
            // $tss->ct2=$data['ct2'][$i];
            // $tss->ct3=$data['ct3'][$i];
            // $tss->ct4=$data['ct4'][$i];
             $tss->boardviva=$data['boardviva'][$i];
             $tss->exam=$data['exam'][$i];
             $tss->average=$data['average'][$i];
     
           //  sort($tss1);
            //$value= $data['boardviva'][$i]+$data['exam'][$i]+$data['average'][$i];
            //$tss->totalmarks=$value;
            $atts=Attend::where('course1',$course1)->where('code',$data['ct_code'][$i])->first();
            $total=DB::table("attends")->distinct()->get(['date']);
                $total_count=$total->count();
                $attends=DB::table("attends")->select(DB::raw('code,COUNT(*) AS codecount'))->where('code',$data['ct_code'][$i])->whereraw('attendance=1')->groupby('code')->get();
                $total=($attends[0]->codecount*100)/$total_count;

                if($total>=90){$total=8;}
                elseif ($total>=85 && $total<90 ) { $total=7;}
                elseif ($total>=80 && $total<85 ) { $total=6;}
                elseif ($total>=70 && $total<80 ) { $total=5;}
                elseif ($total>=60 && $total<70 ) { $total=4;}
                elseif ($total<60 ) { $total=0;}
                 $value= $data['boardviva'][$i]+$data['exam'][$i]+$data['average'][$i]+$total;
                
            $tss->totalmarks=$value;
               $tss->attendmark=$total; 
            $tss->save();
               
        }
        $cts=Ctmark::where('course1',$course1)->where('section',$section)->get();
                return view('users.markedit',['cts'=>$cts]); 
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
     public function ctmarks($course1,$section,$id)
    {
        $cts=Ctmark::where('course1',$course1)->where('section',$section)->first();
          //dd($courses);
        if($cts==null){
          return redirect()->route('teachercoursect',$id);
            // return view('users.ct');
        }

        else
            { 
                $cts=Ctmark::where('course1',$course1)->where('section',$section)->get();
                return view('users.ctedit',['cts'=>$cts]); }

    }
     public function marks($course1,$section,$id)
    {
        $cts=Ctmark::where('course1',$course1)->where('section',$section)->first();
          //dd($courses);
        if($cts==null){
          return redirect()->route('markstore',$id);
            // return view('users.ct');
        }

        else
            { 
                $cts=Ctmark::where('course1',$course1)->where('section',$section)->get();
                return view('users.markedit',['cts'=>$cts]); }

    }
    public function studentctmarks($course1,$code)
    {
        $cts=Ctmark::where('course1',$course1)->where('code',$code)->first();
          //dd($courses);
        if($cts==null){
          
            // return view('users.ct');
          return view('users.studentct',['cts'=>$cts]); }
        

        else
            { 
                $cts=Ctmark::where('course1',$course1)->where('code',$code)->first();
                return view('users.studentct',['cts'=>$cts]); }

    }
    public function studentcgpa($code)
    {
        $cts=Ctmark::where('code',$code)->first();
          //dd($courses);
        if($cts==null){
          
            // return view('users.ct');
          return view('users.studentcgpa',['cts'=>$cts]); }
        

        else
            { 
                $cts=Ctmark::where('code',$code)->get();
                return view('users.studentcgpa',['cts'=>$cts]); }

    }
    
         

    public function ct()
    {
        return view('users.ctedit');
    }
}
