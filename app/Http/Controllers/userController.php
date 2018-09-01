<?php

namespace EInvoice\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all data of Users
        $users=DB::table('addusers')->get();
        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create a new user
        return view('createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       //Insert data
        $data = [
            'name' => $request->name,
            'designation' => $request->input('designation'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        DB::table('addusers')->insert($data);
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users=DB::table('addusers')->where('id','=',$id)->get();
        return view('showuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=DB::table('addusers')->where('id','=',$id)->first();
        return view('edituser', compact('users'));
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
        //Update Record
         $data = [
            'name' => $request->name,
            'designation' => $request->input('designation'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        DB::table('addusers')->where('id','=',$id)->update($data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete the Record
        DB::table('addusers')->where('id','=',$id)->delete();
        return redirect('user');
    }
}
