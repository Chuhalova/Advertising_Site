<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
           <li><a href='profile'>Мій профіль</a></li>
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
           <li><a href="{{ route('admin_advertisement_inactive') }}">{{ __('Неактивовані') }}</a></li>
           <li><a href="{{ route('admin_advertisement_active') }}">{{ __('Активовані') }}</a></li>
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
    <main style='padding:0!important;'>
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
@yield('scripts')
</body>
</html>
