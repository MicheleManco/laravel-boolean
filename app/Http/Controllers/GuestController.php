<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class GuestController extends Controller
{
    public function home(){

        return view('pages.home');
    }

    public function createPostcard(){
        return view('pages.create');
    }

    public function storePostcard(Request $request){
        $data = $request -> validate([
            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
        ]);

        // $imageFile = $data['image']; 
        $imageFile = $request -> file('image');
        $imageName = rand(10000, 99999).'_'. time() . '.' . $imageFile -> getClientOriginalExtension();
        
        $imageFile -> storeAs('/postcards/', $imageName, 'public');
        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect() -> route('home');
    }
}
