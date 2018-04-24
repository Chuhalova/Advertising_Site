<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style media="screen">
    #cssmenu,
    #cssmenu ul,
    #cssmenu ul li,
    #cssmenu ul li a,
    #cssmenu #menu-button {
      margin: 0;
      padding: 0;
      border: 0;
      list-style: none;
      line-height: 1;
      display: block;
      position: relative;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      z-index: 1000;
    }
    #cssmenu:after,
    #cssmenu > ul:after {
      content: ".";
      display: block;
      clear: both;
      visibility: hidden;
      line-height: 0;
      height: 0;
    }
    #cssmenu #menu-button {
      display: none;
    }
    #cssmenu {
      width: auto;
      background: #1991eb;
    }
    #cssmenu > ul {
      background: url('images/bg.png');
      box-shadow: inset 0 -3px 0 rgba(0, 0, 0, 0.05);
    }
    #cssmenu.align-right > ul > li {
      float: right;
    }
    #cssmenu > ul > li {
      float: left;
      display: inline-block;
    }
    #cssmenu.align-center > ul {
      float: none;
      text-align: center;
    }
    #cssmenu.align-center > ul > li {
      float: none;
    }
    #cssmenu.align-center ul ul {
      text-align: left;
    }
    #cssmenu > ul > li > a {
      padding: 18px 25px 21px 25px;
      border-right: 1px solid rgba(80, 80, 80, 0.12);
      text-decoration: none;
      font-size: 13px;
      color: #d3eced;
      text-transform: uppercase;
    }
    #cssmenu > ul > li:hover > a,
    #cssmenu > ul > li > a:hover,
    #cssmenu > ul > li.active > a {
      color: #ffffff;
      background: #32a9c3;
      background: rgba(0, 0, 0, 0.1);
    }
    #cssmenu ul ul {
      position: absolute;
      left: -9999px;
      top: 60px;
      padding-top: 6px;
      font-size: 13px;
      opacity: 0;
      -webkit-transition: top 0.2s ease, opacity 0.2s ease-in;
      -moz-transition: top 0.2s ease, opacity 0.2s ease-in;
      -ms-transition: top 0.2s ease, opacity 0.2s ease-in;
      -o-transition: top 0.2s ease, opacity 0.2s ease-in;
      transition: top 0.2s ease, opacity 0.2s ease-in;
    }
    #cssmenu.align-right ul ul {
      text-align: right;
    }
    #cssmenu > ul > li > ul::after {
      content: "";
      position: absolute;
      width: 0;
      height: 0;
      border: 5px solid transparent;
      border-bottom-color: #ffffff;
      top: -4px;
      left: 20px;
    }
    #cssmenu.align-right > ul > li > ul::after {
      left: auto;
      right: 20px;
    }
    #cssmenu ul ul ul::after {
      content: "";
      position: absolute;
      width: 0;
      height: 0;
      border: 5px solid transparent;
      border-right-color: #ffffff;
      top: 11px;
      left: -4px;
    }
    #cssmenu.align-right ul ul ul::after {
      border-right-color: transparent;
      border-left-color: #ffffff;
      left: auto;
      right: -4px;
    }
    #cssmenu > ul > li > ul {
      top: 120px;
    }
    #cssmenu > ul > li:hover > ul {
      top: 52px;
      left: 0;
      opacity: 1;
    }
    #cssmenu.align-right > ul > li:hover > ul {
      left: auto;
      right: 0;
    }
    #cssmenu ul ul ul {
      padding-top: 0;
      padding-left: 6px;
    }
    #cssmenu.align-right ul ul ul {
      padding-right: 6px;
    }
    #cssmenu ul ul > li:hover > ul {
      left: 180px;
      top: 0;
      opacity: 1;
    }
    #cssmenu.align-right ul ul > li:hover > ul {
      left: auto;
      right: 100%;
      opacity: 1;
    }
    #cssmenu ul ul li a {
      text-decoration: none;
      padding: 11px 25px;
      width: 180px;
      color: #777777;
      background: #ffffff;
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1), 1px 1px 1px rgba(0, 0, 0, 0.1), -1px 1px 1px rgba(0, 0, 0, 0.1);
    }
    #cssmenu ul ul li:hover > a,
    #cssmenu ul ul li.active > a {
      color: #333333;
    }
    #cssmenu ul ul li:first-child > a {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px;
    }
    #cssmenu ul ul li:last-child > a {
      border-bottom-left-radius: 3px;
      border-bottom-right-radius: 3px;
    }
    #cssmenu > ul > li > ul::after {
      position: absolute;
      display: block;
    }
    @media all and (max-width: 800px), only screen and (-webkit-min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min--moz-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (-o-min-device-pixel-ratio: 2/1) and (max-width: 1024px), only screen and (min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min-resolution: 192dpi) and (max-width: 1024px), only screen and (min-resolution: 2dppx) and (max-width: 1024px) {
      #cssmenu {
        background: #1991eb;
      }
      #cssmenu > ul {
        display: none;
      }
      #cssmenu > ul.open {
        display: block;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
      }
      #cssmenu.align-right > ul {
        float: none;
      }
      #cssmenu.align-center > ul {
        text-align: left;
      }
      #cssmenu > ul > li,
      #cssmenu.align-right > ul > li {
        float: none;
        display: block;
      }
      #cssmenu > ul > li > a {
        padding: 18px 25px 18px 25px;
        border-right: 0;
      }
      #cssmenu > ul > li:hover > a,
      #cssmenu > ul > li.active > a {
        background: rgba(0, 0, 0, 0.1);
      }
      #cssmenu #menu-button {
        display: block;
        text-decoration: none;
        font-size: 13px;
        color: #d3eced;
        padding: 18px 25px 18px 25px;
        text-transform: uppercase;
        letter-spacing: 1px;
        background: url('images/bg.png');
        cursor: pointer;
      }
      #cssmenu ul ul,
      #cssmenu ul li:hover > ul,
      #cssmenu > ul > li > ul,
      #cssmenu ul ul ul,
      #cssmenu ul ul li:hover > ul,
      #cssmenu.align-right ul ul,
      #cssmenu.align-right ul li:hover > ul,
      #cssmenu.align-right > ul > li > ul,
      #cssmenu.align-right ul ul ul,
      #cssmenu.align-right ul ul li:hover > ul {
        left: 0;
        right: auto;
        top: auto;
        opacity: 1;
        width: 100%;
        padding: 0;
        position: relative;
        text-align: left;
      }
      #cssmenu ul ul li {
        width: 100%;
      }
      #cssmenu ul ul li a {
        width: 100%;
        box-shadow: none;
        padding-left: 35px;
      }
      #cssmenu ul ul ul li a {
        padding-left: 45px;
      }
      #cssmenu ul ul li:first-child > a,
      #cssmenu ul ul li:last-child > a {
        border-radius: 0;
      }
      #cssmenu #menu-button::after {
        display: block;
        content: '';
        position: absolute;
        height: 3px;
        width: 22px;
        border-top: 2px solid #d3eced;
        border-bottom: 2px solid #d3eced;
        right: 25px;
        top: 18px;
      }
      #cssmenu #menu-button::before {
        display: block;
        content: '';
        position: absolute;
        height: 3px;
        width: 22px;
        border-top: 2px solid #d3eced;
        right: 25px;
        top: 28px;
      }
    }
    </style>
</head>
<body>
  <div class="container-scroller">
    <div id='cssmenu'>
      <ul>
        <li><a href='{{ url('/') }}'><span>ADV</span></a></li>
        @guest
        <li><a href='{{ route('login') }}'><span>Увійти</span></a></li>
        <li class='last'><a href='{{ route('register') }}'><span>Зареєструватись</span></a></li>
        @else
        @if(\Illuminate\Support\Facades\Auth::user()->hasRole('User'))
           <li><a href="{{ URL::to('profile/show') }}">Мій профіль</a></li>
           <li><a href="{{ route('home') }}">{{ __('Додати оголошення') }}</a></li>
           <li>
             <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               {{ __('Вийти') }}
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
             </form>
           </li>
         @else
           <li><a href="{{ route('home') }}">{{ __('Усі') }}</a></li>
           <li><a href="{{ route('home') }}">{{ __('Неактивовані') }}</a></li>
           <li>
             <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               {{ __('Вийти') }}
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
             </form>
           </li>
         @endif
        @endguest
      </ul>
    </div>
    <main style='padding: none !important;'>
      @yield('content')
    </main>
  </div>
  <script src='{{asset("js/app.js")}}'></script>
<script type="text/javascript">
( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
$('#cssmenu #menu-button').on('click', function(){
  var menu = $(this).next('ul');
  if (menu.hasClass('open')) {
    menu.removeClass('open');
  }
  else {
    menu.addClass('open');
  }
});
});
} )( jQuery );
</script>
</body>
</html>