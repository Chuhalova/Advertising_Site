<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdvertisementRequest;
use App\Advertisement;
use App\AdvImage;
use App\Http\Requests\AdvimageRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class AdvertisementController extends Controller
{
    public function messages()
    {
        return [
            'category_id.required' => 'Вибір категорії є обовязковим',
        ];
    }
    public function index()
    {
    }
    public function create()
    {
        return view('advertisements.create');
    }
    public function store(AdvertisementRequest $request)
    {
        $advertisement = new Advertisement();
        $advertisement->user_id = Auth::user()->id;
        $advertisement->title = $request->title;
        $advertisement->description = $request->description;
        $advertisement->condition = $request->condition;
        $advertisement->status = 'inactive';
        $advertisement->price = $request->price;
        if (($request->child) != '') {
            $advertisement->category_id = $request->child;
        } elseif (($request->child) == '' && ($request->par) != '') {
            $advertisement->category_id = $request->par;
        }
        $advertisement->save();
        if (($request->images) != []) {
            foreach ($request->images as $image) {
                $filename = $image->store('/public/images');
                AdvImage::create([
                    'advertisement_id' => $advertisement->id,
                    'image' => $filename
                ]);
            }
        }
        return Redirect::to('/advertisements/' . $advertisement->id . '/edit');
    }
    public function edit($id)
    {
        $advertisement = Advertisement::find($id);
        if (!isset($advertisement)) {
            abort(402);
        } else {
            if ($advertisement->user_id == Auth::user()->id) {
                $images = AdvImage::whereAdvertisement_id($advertisement->id)->get();
                $images = $images->sortBy('id');
                return View::make('advertisements.edit', [
                    'advertisement' => $advertisement,
                    'images' => $images,
                ]);
            } else {
                abort(401);
            }
        }
    }
    public function update(AdvertisementRequest $request, $id)
    {
        if((Auth::user()->id) == (Advertisement::find($id)->user_id)){
            $advertisement = Advertisement::find($id);
            if(!isset($advertisement)){
                abort(402);
            }
            else{
                $advertisement->status='inactive';
                $advertisement->title = $request->title;
                $advertisement->description=$request->description;
                $advertisement->price =$request->price;
                $advertisement->condition=$request->condition;
                $advertisement->save();
                return Redirect::to('/advertisements/' . $id . '/edit');
            }
        }
        else{
            abort(401);
     }
    }

    public function updateOnImg(AdvimageRequest $request, $id)
    {
        $filename = $request->file('image')->store('/public/images');
        AdvImage::create([
            'advertisement_id' => $id,
            'image' => $filename
        ]);
        return Redirect::to('/advertisements/'. $id. '/edit');
    }
    public function show($id)
    {

    }
    public function destroyImage($id){
        $advimage = AdvImage::find($id);
        if(!isset($advimage)){
            abort(402);
        }
        else{
            $page = $advimage -> advertisement_id;
            Storage::delete($advimage->image);
            $advimage->delete();
            return Redirect::to('/advertisements/' . $page . '/edit');
        }
    }
}
