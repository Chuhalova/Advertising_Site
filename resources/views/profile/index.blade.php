@extends('layouts.app')
@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card-body">
          <div class="card">
            <div class="card-body">
              <div>
              <h5 style='line-height:38px;float:right;' class="text-center bolder">{{$user->surname . ' ' . $user->name}}</h5>
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('User'))
                  <button style="float: right;" type="button" class="button_icon_who  btn social-btn btn-success btn-rounded" id="button_icon_user"></button>
                @else
                  <button style="float: right;" type="button" class="button_icon_who  btn social-btn btn-success btn-rounded" id="button_icon_admin"></button>
                @endif
              </div>
              <div id='profile_avatar_container' lass="row d-flex align-items-center justify-items-center flex-column">
                <div class="text-center">
                  @if(($user->avatar)=='')
                    <div class="profile_avatar_displaying col-12">
                      <img src="{{asset('null_avatar.jpg')}}" class="rounded-circle" width="100" height="100" />
                    </div>
                    <div class="form-group profile_avatar_displaying col-12">
                      @if(count($errors))
                        <div class="alert alert-danger" role="alert">
                          <ul class="error_container">
                            @foreach($errors->all() as $key => $value)
                              <li class="error_li">{{ $value }}</li>
                            @endforeach
                          </ul>
                        </div>
                      @endif
                      <form enctype='multipart/form-data' action="profile" method="post">
                        {{method_field('PUT')}}
                        {{ csrf_field() }}
                        <value for="avatar">Завантажте фото</value>
                        <input class='offset-lg-4  col-lg-4 col-md-4 offset-md-4 col-sm-12 offset-md-0 form-control' type="file" name="avatar">
                        <button type="submit" id='add_avatar_btn' class="offset-lg-5 col-lg-2 col-md-2 offset-md-5 col-sm-12 offset-md-0 btn btn-primary btn-rounded btn-fw btn-sm">Додати фото</button>
                      </form>
                    </div>
                  @else
                    <div class="profile_avatar_displaying col-12">
                      <img src="{{ URL::to($url)}}" class="rounded-circle" width="100" height="100" />
                    </div>
                    <div class="form-group profile_avatar_displaying col-12">
                      @if(count($errors))
                        <div class="alert alert-danger" role="alert">
                          <ul class="error_container">
                            @foreach($errors->all() as $key => $value)
                              <li class="error_li">{{ $value }}</li>
                            @endforeach
                          </ul>
                        </div>
                      @endif
                      <form enctype='multipart/form-data' action="profile" method="post">
                        {{method_field('PUT')}}
                        {{ csrf_field() }}
                        <value for="avatar">Завантажте фото</value>
                        <input class='offset-lg-4  col-lg-4 col-md-4 offset-md-4 col-sm-12 offset-md-0 form-control' type="file" name="avatar">
                        <button type="submit" id='add_avatar_btn' class="offset-lg-5 col-lg-2 col-md-2 offset-md-5 col-sm-12 offset-md-0 btn btn-primary btn-rounded btn-fw btn-sm">Змінити фото</button>
                      </form>
                    </div>
                  @endif
                </div>
              </div>
              <div class="card-body">
                <h4 class="card-title">Основна інформація</h4>
                <table class="table">
                  <thead>
                  <tr>
                    <th>{{$user->surname . ' ' . $user->name}}</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Номер телефону</td>
                    <td>{{$user->phone}}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>{{$user->email}}</td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
