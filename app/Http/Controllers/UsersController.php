<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Requests;
use App\Http\Controllers\Controller; 
use App\User;
class UsersController extends Controller
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
         return view('users.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, User::$create_validation_rules);
        $data = $request->only('name','email','department','code','field','password');
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        if($user){
            // dd($user);
            \Auth::login($user);
            $field=\Auth::user()->field;
            if($field=="t")
            {return redirect()->route('home');}
             else
                {return redirect()->route('shome');}
        }
        return back()->withInput();
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
        $users=User::find($id);
        return view('users.edit',['users'=>$users]);
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
        $users=User::find($id);
        $users->name=$request->get('name');
         $users->email=$request->get('email');
          $users->phoneno=$request->get('phoneno');
          $users->contactaddress=$request->get('contactaddress');
          $users->bloodgroup=$request->get('bloodgroup');
         
        $users->save();
        if($users->fied=='s')
        {return redirect()->route('shome');}
        else
            {return redirect()->route('home');}
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

     public function home()
    {
       return view('users.home');
    }
    public function shome()
    {
       return view('users.shome');
    }
}
