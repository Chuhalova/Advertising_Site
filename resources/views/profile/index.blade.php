@extends('layouts2.header')
@section('content')
  <div class="has_role_for_icon">
    <h5 class="pre_icon_text">{{$user->surname . ' ' . $user->name}}</h5>
    @if(\Illuminate\Support\Facades\Auth::user()->hasRole('User'))
      <div class="user_icon"></div>
    @else
      <div class="admin_icon"></div>
    @endif
  </div>
  <div id='profile_avatar_container' class="d-flex align-items-center justify-items-center flex-column">
    <div class="text-center">
      @if(($user->avatar)=='')
        <div class="profile_avatar_displaying col-12">
          <img src="{{asset('assets2/images/empty.png')}}"  width="100" height="100" />
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
          <form  enctype='multipart/form-data' action="profile" method="post">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <value for="avatar">Завантажте фото</value>
            <input class="input_change_avatar" type="file" name="avatar">
            <button type="submit" class='btn_change_avatar'>Додати фото</button>
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
            <input class="input_change_avatar" type="file" name="avatar">
            <button type="submit" class='btn_change_avatar'>Змінити фото</button>
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
        <td class="col-md-6">Номер телефону</td>
        <td class="col-md-6">{{$user->phone}}</td>
      </tr>
      <tr>
        <td class="col-md-6">Email</td>
        <td class="col-md-6">{{$user->email}}</td>
      </tr>
      </tbody>
    </table>
  </div>
@endsection
