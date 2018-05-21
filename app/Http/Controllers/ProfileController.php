<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ProfileController extends Controller
{
     public function index()
     {
         $user = \Illuminate\Support\Facades\Auth::user();
         $url = Storage::url($user->avatar);
         return \Illuminate\Support\Facades\View::make('profile.index', [
             'user' => $user,
             'url' => $url,
         ]);
     }
    public function updateAvatar(Request $request)
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $rules = array(
            'avatar' => 'image'
        );
          $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('profile')
                ->withErrors($validator);
        } else {
            if(($request->file('avatar')) != ''){
                if(($user->avatar)!=''){
                    Storage::delete($user->avatar);
                }
                $filename = str_slug($user->phone.'avatar');
                $file =  $request->file('avatar');
                $path=$request->file('avatar')->storeAs('/public/images',$filename.'.'.$file->getClientOriginalExtension());
                $user->avatar =$path;
                $user->save();
            }
            return Redirect::to('profile');
        }
    }
}
