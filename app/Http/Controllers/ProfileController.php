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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
      */

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
//    public function updateImage(Request $request, $id){
//        dd('hello');
//    }
//    public function c(){
//        $user = \Illuminate\Support\Facades\Auth::user();
//        return view('profile.index')->with('user',$user);
//    }
    //
    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }
    //
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }
    //
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
//    public function show()
//    {
//
//    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
//    public function edit($id)
//    {
//        $post = Post::find($id);
//        return view('posts.edit')->with('post', $post);
//    }
//    public function update(Request $request, $id)
//    {
//        $rules = array(
//            'title' => 'required|min:2|max:150',
//            'description' => 'required|min:2|max:200'
//        );
//
//        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);
//
//        if ($validator->fails()) {
//            return Redirect::to('posts/'. $id .'/edit')
//                ->withErrors($validator);
//        } else {
//            $post = Post::find($id);
//            $post->title = $request->title;
//            $post->description = $request->description;
//            $post->save();
//            return Redirect::to('posts');
////        }
//    }
    //
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
