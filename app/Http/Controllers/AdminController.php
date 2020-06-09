<?php

namespace App\Http\Controllers;
use App\User;
use App\Hotel;
use Auth;
use App\Hotelreview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class AdminController extends Controller
{
    // Dashboard Routes

public function __construct(){
    if($this->middleware(['auth','verified'])){
        return true;
    }else{
        return redirect('/login');
    }
}

    public function index(User  $user, Hotel $hotel, Hotelreview $hotelreview)
    {
        if(!Auth::check()){
            return redirect('/login');
        }

        $totalUserCount = Cache::remember(
            'count.user.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->count();
            });

            $totalhotelCount = Cache::remember(
                'count.hotel.' . $hotel->id,
                now()->addSeconds(30),
                function () use ($hotel) {
                    return $hotel->count();
                });

             $totalhotelreviewCount = Cache::remember(
                'count.hotelreview.' . $hotelreview->id,
                now()->addSeconds(30),
                function () use ($hotelreview) {
                    return $hotelreview->count();
                });

        return view('master.dashboard',compact('user','totalUserCount', 'hotel', 'totalhotelCount', 'totalhotelreviewCount'));

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
