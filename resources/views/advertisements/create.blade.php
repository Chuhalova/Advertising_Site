@extends('layouts.app')
@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center" style="background-image:url({{asset('images/create_adv.jpg')}});background-size: cover;">
                <div class="row w-100">
                    <div class="col-lg-8 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <h4 class="blue_text_max">Створити нове оголошення</h4>
                            <h5 class="blue_text_min font-weight-light">Заповніть всі поля</h5>
                            <div style='margin:0!important;padding: 0!important;border: none!important;' class="alert alert-danger" role="alert">
                                @if (count($errors) > 0)
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                            <form id="create_adv" enctype="multipart/form-data" class="blue_form forms-sample">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title" class="blue_label col-sm-6 col-form-label">Заголовок</label>
                                    <input type="text"  class="col-sm-12  col-form-label" placeholder="Введіть заголовок" name="title" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="blue_label col-sm-6 col-form-label">Опис</label>
                                    <textarea type="text"  rows='10' class="col-sm-12 col-form-label" placeholder="Опишіть товар" name="description" id="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="blue_label col-sm-6 col-form-label' for="par">Категорія</label>
                                    <select class="form-control" id="par" name="par">
                                        <option value="">Оберіть категорію</option>
                                    </select>
                                </div>
                                <div id='for_child' style='display:none;' class="form-group">
                                    <label class='class="blue_label col-sm-6 col-form-label' for="child">Підкатегорії</label>
                                    <select class="form-control" id="child" name="child">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price" class="blue_label col-sm-6 col-form-label">Вартість</label>
                                    <input type="text" class="col-sm-12 col-form-label" placeholder="Вкажіть вартість" name="price" id="price">
                                </div>
                                <div class="form-group">
                                    <label for="images" class="blue_label col-sm-6 col-form-label">Стан товару</label>
                                    <select class="form-control" id="condition" name="condition">
                                        <option value="">Оберіть стан товару</option>
                                        <option value="б/у">б/у</option>
                                        <option value="новий">новий</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="images" class="blue_label col-sm-6 col-form-label">Фото товару</label>
                                    <input type="file" class="col-sm-12 col-form-label" placeholder="Додайте фото(max:3)"  name="images[]" multiple>
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
        $('#create_adv').submit(function (event) {
            event.preventDefault();

            $.post("advertisement/create", function (data, status) {

            });
        });
    })
</script>
@endsection
