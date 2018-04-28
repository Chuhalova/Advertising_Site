<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdvertisementRequest;
use App\Advertisement;
use App\AdvImage;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdvertisementController extends Controller
{
    public function messages(){
        return [
            'category_id.required' => 'Вибір категорії є обовязковим',
        ];
    }
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
        return view('advertisements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {
//        $rules = array(
//            'title' => 'required|min:2|max:150',
//        );
//        $validator = Validator::make($request->all(),$rules);
//
//        if ($validator->fails()) {
//            return Redirect::to('advertisements/create')
//                ->withErrors($validator);
//        }
//        else {
        $advertisement = new Advertisement();
        $advertisement->user_id = Auth::user()->id;
        $advertisement->title = $request->title;
        $advertisement->description = $request->description;
        $advertisement->condition = $request->condition;
        $advertisement->status = 'inactive';
        $advertisement->price = $request->price;
        if(($request->child)!=''){
            $advertisement->category_id=$request->child;
        }
        elseif(($request->child)=='' && ($request->par)!=''){
            $advertisement->category_id=$request->par;
        }
        $advertisement->save();
        if (($request->images)!=[]){
            foreach ($request->images as $image) {
                $filename = $image->store('images');
                AdvImage::create([
                    'advertisement_id' => $advertisement->id,
                    'image' => $filename
                ]);
            }
        }
        return 'Upload successful!';
//            $advertisement = new Advertisement;
//            if (($request->child)!=''){
//                $advertisement->category_id = $request->child;
//            }
//            else{
//                $advertisement->category_id = $request->par;
//            }
//            $advertisement->title=$request->title;
//            $advertisement->user_id = Auth::user()->id;
//            $advertisement->save();
//            return Redirect::to('advertisements');
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
}
