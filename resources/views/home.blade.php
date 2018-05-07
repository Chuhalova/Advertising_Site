<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{asset('assets2/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('assets2/css/shop.css')}}" type="text/css" media="screen" property="" />
    <link href="{{asset('assets2/css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Owl-carousel-CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets2/css/jquery-ui1.css')}}">
    <link href="{{asset('assets2/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="{{asset('assets2/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    {{--<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"--}}
          {{--rel="stylesheet">--}}
    {{--<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">--}}
</head>

<body>
<!-- banner -->
<div class="banner_top innerpage" id="home">
    <div class="wrapper_top_w3layouts">
        <div class="header_agileits">
            <div class="logo inner_page_log">
                <h1><a class="navbar-brand" href="index.html"><span>Downy</span> <i>Shoes</i></a></h1>
            </div>
            <div class="overlay overlay-contentpush">
                <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

                <nav>
                    <ul>
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="404.html">Team</a></li>
                        <li><a href="shop.html">Shop Now</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="mobile-nav-button">
                <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>
            <!-- cart details -->
            <div class="top_nav_right">
                <div class="shoecart shoecart2 cart cart box_1">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="top_shoe_cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //cart details -->
    <!-- search -->
    <div class="search_w3ls_agileinfo">
        <div class="cd-main-header">
            <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
            </ul>
        </div>
        <div id="cd-search" class="cd-search">
            <form action="#" method="post">
                <input name="Search" type="search" placeholder="Click enter after typing...">
            </form>
        </div>
    </div>
    <!-- //search -->
    <div class="clearfix"></div>
    <!-- /banner_inner -->
    <div class="services-breadcrumb_w3ls_agileinfo">
        <div class="inner_breadcrumb_agileits_w3">

            <ul class="short">
                <li><a href="index.html">Home</a><i>|</i></li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
    <!-- //banner_inner -->
</div>

<!-- //banner -->
<!-- top Products -->
<div class="ads-grid_shop">
    <div class="shop_inner_inf">
        <form class="side-bar col-md-3">
            <div class="range">
                <h3 class="agileits-sear-head">Пошук</h3>
                <input type="search" placeholder="Назва товару..." name="search" required="">
            </div>
            <div class="form-group">
                <select class="form-control col-xs-12" id="par" name="par">
                    <option value="">Оберіть категорію</option>
                </select>
            </div>
            <div id='for_child' style='display:none;' class="form-group">
                <select class="form-control col-xs-12" id="child" name="child">
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-12 col-xs-12 col-form-label" placeholder="Мін. вартість" name="price1" id="price1">
            </div>
            <div class="form-group">
                <input type="text" class="col-sm-12 col-xs-12 col-form-label" placeholder="Макс. вартість" name="price2" id="price2">
            </div>
            <div class="form-group">
                <select class="form-control col-xs-12" id="condition" name="condition">
                    <option value="">Оберіть стан товару</option>
                    <option value="б/у">б/у</option>
                    <option value="новий">новий</option>
                </select>
            </div>
            <button type="submit" class="">Додати</button>
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
                                            <a href="single.html" class="link-product-add-cart">Детальніше</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="single.html">{{$adv->title}}</a>
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
                    <div style="text-align: center;margin: auto;">
                        {!! $activeAdv->links()!!}
                    </div>
                    </div>
                    <!-- //mens -->
                    <div class="clearfix"></div>

                </div>

                <!-- //product-sec1 -->
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

<!-- //newsletter-->
<!-- footer -->
<div class="footer_agileinfo_w3">
    <div class="footer_inner_info_w3ls_agileits">
        <div class="col-md-3 footer-left">
            <h2><a href="index.html"><span>D</span>owny Shoes </a></h2>
            <p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
            <ul class="social-nav model-3d-0 footer-social social two">
                <li>
                    <a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="404.html">Services</a></li>
                        <li><a href="404.html">Short Codes</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4>Store <span>Information</span></h4>
                    <div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Phone Number</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Location</h6>
                                <p>Broome St, NY 10002,California, USA.

                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        <p class="copy-right-w3ls-agileits">&copy 2018 Downy Shoes. All rights reserved | Design by <a href="http://w3layouts.com/">w3layouts</a></p>
    </div>
</div>
</div>
<!-- //footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="{{asset('assets2/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets2/js/minicart.js')}}"></script>
<script>
    shoe.render();

    shoe.cart.on('shoe_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<script src="{{asset('assets2/js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('assets2/js/classie.js')}}"></script>
<script src="{{asset('assets2/js/demo1.js')}}"></script>
<script src="{{asset('assets2/js/search.js')}}"></script>
<script src="{{asset('assets2/js/jquery-ui.js')}}"></script>
<script>
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
    });
</script>
<script type="text/javascript" src="{{asset('assets2/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets2/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $.get("/categories", function(data, status){
            data.forEach(function(item) {
                $('#par').append(`<option value="`+item.id+`">` + item.category +`</option>`);
                console.log(item);
            });
        });
        $('#par').change(function() {
            var value = $(this).val();
            if (!value) {
                $('#for_child').css('display', 'none');
                $('#child').html('<option value="">Оберіть підкатегорію</option>');
            } else {
                $.get("/categories/" + value, function (data, status) {
                    if (data.length == 0) {
                        $('#for_child').css('display', 'none');
                        $('#child').html('<option value="">Оберіть підкатегорію</option>');
                    } else {
                        $('#for_child').css('display', 'block');
                        $('#child').html('<option value="">Оберіть підкатегорію</option>');
                        data.forEach(function (item) {
                            $('#child').append(`<option value="` + item.id + `">` + item.category + `</option>`);
                            console.log(item);
                        });
                    }
                });
            }
        });
    })
    </script>
<!-- //end-smoth-scrolling -->
<script type="text/javascript" src="{{asset('assets2/js/bootstrap-3.1.1.min.js')}}"></script>
</body>



