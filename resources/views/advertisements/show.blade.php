@extends('layouts.app')
@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper" id="create_top_wrapper">
            <div class="content-wrapper d-flex align-items-center" style="background-image:url({{asset('images/create_adv.jpg')}});background-size: cover;">
                <div class="row w-100">
                    <div id='show_pre_inner_cont' class="col-lg-12 col-xs-12 mx-auto">
                        <div id='show_inner_cont' class="auth-form-light text-left">
                            <h4 class="blue_text_max"></h4>
                                @if(count($images) != 0 && count($images) <4)
                                    <ul id="slider">
                                        <li class="current slider_elem">
                                            <img class="slider_img" src="{{URL::to(Storage::url($images[0]->image))}}" alt="">
                                        </li>
                                        @if(count($images)>1)
                                            @for($i=1;$i<count($images);$i++)
                                                <li class="slider_elem">
                                                    <img class="slider_img" src="{{URL::to(Storage::url($images[$i]->image))}}" alt="">
                                                </li>
                                            @endfor
                                            <button id='left_button' class="btn social-btn btn-success btn-rounded"></button>
                                            <button id='right_button' class="btn social-btn btn-success btn-rounded"></button>
                                        @endif
                                    </ul>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            var slides = $('.slider_elem');
            $('#left_button').click(function(){
                var current = slides.filter('.current'),
                        next = current.next();
                if (!next.length){next = slides.first();}
                slides.removeClass('off');
                current.removeClass('current').addClass('off');
                next.removeClass('off').addClass('current');
            });
            $('#right_button').click(function(){
                var current = slides.filter('.current'),
                        prev = current.prev();
                if (!prev.length){prev = slides.last();}
                slides.removeClass('off');
                current.removeClass('current').addClass('off');
                prev.removeClass('off').addClass('current');
            });
        });
    </script>
@endsection