<?php

namespace App\Http\Controllers;

use App\hotel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;



class HotelController extends Controller
{
    public function index()
    {
        $hotel = hotel::all();
        return view('master.hotel')->with('hotel', $hotel);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $data = request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'location' => 'required',
            'img' => 'required',
            ]);
            
            // dd($data);
            $imagePath = request('img')->store('uploads','public');
            $image = Image::make(public_path("storage/{$imagePath}"));
            $image->save();
            

        hotel::create([
            'name'=>$data['name'],
            'price'=>$data['price'],
            'description'=>$data['description'],
            'location'=>$data['location'],
            'img'=>$imagePath,
        ]);

        return redirect('admin/hotel')->with('status', 'Data Added for Hotel Profile');
    }

    public function edit($id)
    {

      $hotel = hotel::findOrFail($id);
      return view('master.hotel-edit')
      ->with('hotel', $hotel);
    }

    public function update(Request $request, $id)
    {
        $hotel = hotel::findOrFail($id);
        $data = $request->all();
        // echo "<pre>";print_r($data);die;
        if($hotel['img']==''){
            if($request->file('img')){
                $image=$request->file('img');
                if($image->isValid()){
                        $imagePath = request('img')->store('uploads','public');
                    $image = Image::make(public_path("storage/{$imagePath}"));
                    $image->save();
                    $data['img']=$imagePath;
                }
            }
        }else{
            $data['img']=$hotel['img'];
        }
        // $hotel->update([
        //     'name'=>$data['name'],
        //     'price'=>$data['price'],
        //     'description'=>$data['description'],
        //     'location'=>$data['location'],
        //     'img'=> $imagePath,
            

        // ]);
      
            $hotel->update($data);
  
            return redirect('/admin/hotel')->with('status', 'Data Updated for Hotel Profile');
        }

        public function delete($id)
        {
            $hotel = hotel::findOrFail($id);
            $hotel->delete();
            return redirect('/admin/hotel')->with('status', 'Data Delete for Hotel Profile');
        }


        public function search(Request $request)
        {
         
            if($request->isMethod('post')){
                $data = $request->all();
        
                $search_hotel = $data['hotel'];
                $hotel=hotel::where('location','like','%'.$search_hotel.'%')->get();
    
         return view('blog', compact($hotel, 'hotel'));

            }
        }

        public function details($id)
        {

        $hotel = hotel::findOrFail($id);
        // $user = User::all();
        // echo "<pre>"; print_r($user);die; 
        $relateHotel=hotel::where([['id','!=',$id],['location',$hotel->location]])->get();
        return view('hotel-details',compact('relateHotel'))
        ->with('hotel', $hotel);
        }

        
}
