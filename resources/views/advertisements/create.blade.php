@extends('layouts.app')
@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper" id="create_top_wrapper">
            <div class="content-wrapper d-flex align-items-center" style="background-image:url({{asset('images/create_adv.jpg')}});background-size: cover;">
                <div class="row w-100">
                    <div id='create_top_p5' class="col-lg-8 col-xs-12 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <h4 class="blue_text_max">Створити нове оголошення</h4>
                            <h5 class="blue_text_min font-weight-light">Заповніть всі поля</h5>
                            @if(count($errors))
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach($errors->all() as $key => $value)
                                            <li>{{ $value }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div id='errors_container' role="alert">
                                <ul id="errors">
                                </ul>
                            </div>
                            <form id="create_adv" method="post" action="/advertisements" enctype="multipart/form-data" class="blue_form forms-sample">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title" class="col-xs-12 blue_label col-sm-6 col-form-label">Заголовок</label>
                                    <input type="text"  class="col-xs-12 col-sm-12  col-form-label" placeholder="Введіть заголовок" name="title" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="blue_label col-xs-12 col-sm-6 col-form-label">Опис</label>
                                    <textarea type="text"  rows='10' class="col-xs-12 col-sm-12 col-form-label" placeholder="Опишіть товар" name="description" id="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 blue_label col-sm-6 col-form-label" for='par'>Категорія</label>
                                    <select class="form-control col-xs-12" id="par" name="par">
                                        <option value="">Оберіть категорію</option>
                                    </select>
                                </div>
                                <div id='for_child' style='display:none;' class="form-group">
                                    <label class='class="blue_label col-xs-12 col-sm-6 col-form-label' for="child">Підкатегорії</label>
                                    <select class="form-control col-xs-12" id="child" name="child">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-xs-12 blue_label col-sm-6 col-form-label">Вартість</label>
                                    <input type="text" class="col-sm-12 col-xs-12 col-form-label" placeholder="Вкажіть вартість" name="price" id="price">
                                </div>
                                <div class="form-group">
                                    <label for="images" class="col-xs-12 blue_label col-sm-6 col-form-label">Стан товару</label>
                                    <select class="form-control col-xs-12" id="condition" name="condition">
                                        <option value="">Оберіть стан товару</option>
                                        <option value="б/у">б/у</option>
                                        <option value="новий">новий</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="images" class="col-xs-12 blue_label col-sm-6 col-form-label">Фото товару</label>
                                    <input type="file" class="col-sm-12 col-xs-12 col-form-label" placeholder="Додайте фото(max:3)"  name="images[]" multiple>
                                </div>
                                <button type="submit" class="blue_label btn btn-success btn-lg mr-2">Додати</button>
                            </form>
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
//        $('#create_adv').submit(function (event) {
//            event.preventDefault();
//            $.post("/advertisements", $(this).serialize())
//                    .done(function (data) {
//                        $('#errors').html('');
//                        window.location.href = '/';
//                    })
//                    .fail(function (errors) {
//                        var errorsArr = errors.responseJSON.errors;
//                        $('#errors').html('');
//                        Object.values(errorsArr).forEach(function (element) {
//                            $('#errors').append(`<li>${element[0]}</li>`);
//                        });
//                    });
//        });
    })
</script>
@endsection
