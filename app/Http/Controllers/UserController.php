<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function profile(){

        return view ('user.profile',  array('user' => Auth::user()));

    }

    public function update_avatar(Request $request){
            //Handle the user upload of avatar
        if($request->hasFile('avatar')){

            $user = Auth::user();
            $avatar = $request->file('avatar');

            if(file_exists('uploads/avatars/' . $user->avatar))
                $filename= $user->avatar;
            else
                $filename = time() . '.' .$avatar->getClientOriginalExtension();


            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/avatars/' . $filename));
            $user->avatar = $filename;
            $user->save();

        }

        return view ('user.profile',  array('user' => Auth::user()));


    }
}
