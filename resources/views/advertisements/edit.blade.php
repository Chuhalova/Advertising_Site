@extends('layouts.app')
@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper" id="create_top_wrapper">
            <div class="content-wrapper d-flex align-items-center" style="background-image:url({{asset('images/create_adv.jpg')}});background-size: cover;">
                <div class="row w-100">
                    <div id='create_top_p5' class="col-lg-12 col-xs-12 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <h4 class="blue_text_max">Змінити оголошення</h4>
                            <div id='img_container_edit' class="row">
                                @if(count($errors))
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach($errors->all() as $key => $value)
                                                <li>{{ $value }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="inner_cont col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        @foreach($images as $image)
                                            <div class="img_edit">
                                                <img src="{{URL::to(Storage::url($image->image))}}" alt="">
                                            </div>
                                            <div class="inner_img">
                                                <form id="delete-advimages-{{$image->id}}" action="{{ url('/advimages/'.$image->id) }}" method="POST" style="display: inline">
                                                    {{method_field('DELETE')}}
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger" ><i class="fa  fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        @endforeach
                                    @if(count($images)<3)
                                        <div class="img_edit">
                                            <img src="{{asset('images/empty_img.png')}}" alt="">
                                        </div>
                                        <form enctype="multipart/form-data" action="{{url('/adv/' . $advertisement->id)}}" method="post">
                                            {{method_field('PATCH')}}
                                            {{ csrf_field() }}
                                            <input type="file" name="image" id="image">
                                            <button type="submit">+</button>
                                        </form>
                                    @endif
                                </div>
                            <div id='errors_container' role="alert">
                                <ul id="errors">
                                </ul>
                            </div>
                            <form method="post" action="{{url('/advertisements/' . $advertisement->id)}}" id="create_adv" enctype="multipart/form-data" class="blue_form forms-sample">
                                {{method_field('PATCH')}}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title" class="col-xs-12 blue_label col-sm-6 col-form-label">Заголовок</label>
                                    <input value="{{$advertisement->title}}" type="text"  class="col-xs-12 col-sm-12  col-form-label" placeholder="Введіть заголовок" name="title" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="blue_label col-xs-12 col-sm-6 col-form-label">Опис</label>
                                    <textarea type="text"  rows='10' class="col-xs-12 col-sm-12 col-form-label" placeholder="Опишіть товар" name="description" id="description">{{$advertisement->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-xs-12 blue_label col-sm-6 col-form-label">Вартість</label>
                                    <input value="{{$advertisement->price}}" type="text" class="col-sm-12 col-xs-12 col-form-label" placeholder="Вкажіть вартість" name="price" id="price">
                                </div>
                                <div class="form-group">
                                    <label for="images" class="col-xs-12 blue_label col-sm-6 col-form-label">Стан товару</label>
                                    <select class="form-control col-xs-12" id="condition" name="condition">
                                        <option value="{{$advertisement->condition}}">{{$advertisement->condition}}</option>
                                        <option value="б/у">б/у</option>
                                        <option value="новий">новий</option>
                                    </select>
                                    </div>
                                    <button type="submit" class="blue_label btn btn-success btn-lg mr-2">Змінити</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
//            $('#create_adv').submit(function (event) {
//                event.preventDefault();
//
//                $.post("/advertisements", $(this).serialize())
//                        .done(function (data) {
//                            $('#errors').html('');
//                            window.location.href = '/';
//                        })
//                        .fail(function (errors) {
//                            var errorsArr = errors.responseJSON.errors;
//                            $('#errors').html('');
//                            Object.values(errorsArr).forEach(function (element) {
//                                $('#errors').append(`<li>${element[0]}</li>`);
//                            });
//                        });
//            });
        })
    </script>
@endsection
