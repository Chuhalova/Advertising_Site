@extends('layouts2.header')
@section('content')
<div class="ads-grid_shop">
    <div class="shop_inner_inf ">
        <form  action={{route('filtrate')}} method='get' class="side-bar col-md-3">
            @if(count($errors))
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $key => $value)
                            <li>{{ $value }}</li>
                        @endforeach
                        @if(isset($err))
                        <li>{{$err}}</li>
                            @endif
                    </ul>
                </div>
            @endif
            <div class="filtr_cont col-md-12 col-sm-12 contact_left_grid">
                <input  class="col-sm-12 col-xs-12 col-form-label" value="{{request()->input('query')}}" type="text" placeholder="Назва товару..." name="query">
            </div>
            <div class="filtr_cont col-md-12 col-sm-12 contact_left_grid">
                <select class="form-control col-xs-12" id="par" name="par">
                    <option value="">Оберіть категорію</option>
                </select>
            </div>
            <div id='for_child' style='display:none;' class="filtr_cont col-md-12 col-sm-12 contact_left_grid">
                <select class="form-control col-xs-12" id="child" name="child">
                </select>
            </div>
            <div class="filtr_cont col-md-12 col-sm-12 contact_left_grid">
                <input type="text" class="col-sm-12 col-xs-12 col-form-label" placeholder="Мін. вартість" name="pricemin" id="pricemin" value="{{request()->input('pricemin')}}">
            </div>
            <div class="filtr_cont col-md-12 col-sm-12 contact_left_grid">
                <input type="text" class="col-sm-12 col-xs-12 col-form-label" placeholder="Макс. вартість" name="pricemax" id="pricemax"  value="{{request()->input('pricemax')}}">
            </div>
            <div class="filtr_cont col-md-12 col-sm-12 contact_left_grid">
                <select class="form-control col-xs-12" id="condition" name="condition">
                    <option value="{{request()->input('condition')}}">@if(request()->input('condition') == '') Оберіть стан товару @else {{request()->input('condition')}}@endif</option>
                    @if(request()->input('condition') == 'новий')
                        <option value="">Оберіть стан товару</option>
                        <option value="б/у">б/у</option>
                    @elseif(request()->input('condition') == 'б/у')
                        <option value="">Оберіть стан товару</option>
                        <option value="новий">новий</option>
                    @else
                        <option value="б/у">б/у</option>
                        <option value="новий">новий</option>
                    @endif
                </select>
            </div>
                <div style='text-align: center' class="contact_grid_right">
                    <input style="margin-left:0!important;" type="submit" value="Уперед"> </input>
                </div>
        </form>
        <!-- //product left -->
        <!-- product right -->
        <div class="left-ads-display col-md-9">
            <div class="wrapper_top_shop">
                <div class="col-md-6 shop_left">
                    <img src="images/banner3.jpg" alt="">
                    <h6>40% off</h6>
                </div>
                <div class="col-md-6 shop_right">
                    <img src="images/banner2.jpg" alt="">
                    <h6>50% off</h6>
                </div>
                <div class="clearfix"></div>
                <!-- product-sec1 -->
                <div class="product-sec1">
                    <!--/mens-->
                    @foreach($activeAdv as $adv)
                    <div  class="col-md-4 product-men">
                        <div class="product-shoe-info shoe">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    @if(count($adv->advimages)!=0)
                                    <img src="{{URL::to(Storage::url($adv->advimages->first()->image))}}" alt="">
                                    @endif
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ URL::to('/show/' . $adv->id) }}" class="link-product-add-cart">Детальніше</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="{{ URL::to('/show/' . $adv->id) }}">{{$adv->title}}</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <div class="grid-price ">
                                                    <span class="money ">UAH{{$adv->price}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;margin: auto;">
                            {!! $activeAdv->links()!!}
                    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 shop_left shp">
                    <img src="images/banner4.jpg" alt="">
                    <h6>21% off</h6>
                </div>
                <div class="col-md-6 shop_right shp">
                    <img src="images/banner1.jpg" alt="">
                    <h6>31% off</h6>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

    <div class="clearfix"> </div>
</div>
</div>
<!-- //footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
@endsection