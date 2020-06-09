<?php

namespace App\Http\Controllers;
use App\hotelreview;
use Illuminate\Http\Request;

class HotelreviewController extends Controller
{
    public function reviews(Request $request)
    {
        
        $data = $request->all();
        // dd($data);
        $data = request()->validate([
            'hotelid'=>'required',
            'name' => 'required',
            'rating' => 'required',
            'reviews' => 'required',
        ]);
// dd($data);
        hotelreview::create([
            'hotelid'=>$data['hotelid'],
            'name'=>$data['name'],
            'rating'=>$data['rating'],
            'reviews'=>$data['reviews'],
          
        ]);
        return redirect()->back();
        
    }

    public function review()
    {
        $hotelreviews = hotelreview::all();
        return view('master.hotelreviews')->with('hotelreviews',$hotelreviews);
    }
}
