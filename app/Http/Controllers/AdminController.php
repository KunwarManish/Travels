<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard Routes
    public function index()
    {
        return view('master.dashboard');
    }

    public function registered()
    {
        $users = User::all();
        return view('master.user')->with('users',$users);
    }

    public function registeredit($id)
    {
        $users = User::findOrFail($id);
        return view('master.edit')->with('users', $users);
    }

    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $data = $request->all();
        // $users->name = $request->input('username');
        // $users->admin = $request->input('usertype');
        $users->update([
            'name'=> $data['username'],
            'usertype'=> $data['usertype'],
        ]);
  
        $users = User::all();
        return view('master.user',compact('users'))->with('status','Your Data is Updated');
    }

    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->back();
    }
}
