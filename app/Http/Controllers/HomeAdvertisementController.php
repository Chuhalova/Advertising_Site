<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Category;
use App\Http\Requests\FiltrateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeAdvertisementController extends Controller
{
    public function index()
    {
        $activeAdv = Advertisement::with(['category', 'user' ,'advimages'])->whereStatus('active')->orderBy('created_at', 'desc')->paginate(9);
        return view('home')-> with(compact('activeAdv'));
    }

    public function filtrate(FiltrateRequest $request)
    {
            if ($request->input('child') != '' && $request->input('par') != '') {
                $categories = array($request->input('child'));
            } elseif ($request->input('child') == '' && $request->input('par') != '') {
                $categories = array($request->input('par'));
                if ($cats = Category::where('parent_id', '=', $request->input('par'))->get()) {

                    foreach ($cats as $item) {
                        array_push($categories, $item->id);
                    }
                }
            } else {
                $categories = Category::select('id')->get();
            }
            if ($request->condition == '') {
                $conditions = array('б/у', 'новий');
            }else {
                $conditions = array($request->condition);
            }
            if($request->input('pricemin') == ''){
                $pricemin = 0;
            }
            else{
                $pricemin = $request->input('pricemin')
;            }
            if($request->input('pricemax') == ''){
                $pricemax = 1000000000;
            }
            else{
                $pricemax = $request->input('pricemax');
            }
            $query = $request->input('query');
            $activeAdv = Advertisement::where('title', 'like', "%$query%")->whereIn('category_id', $categories)->whereIn('condition', $conditions)->where('price','>=',$pricemin)->where('price', '<=', $pricemax)->where('status', '=', 'active')->paginate(9);


            return view('home')->with('activeAdv', $activeAdv);
    }

}
