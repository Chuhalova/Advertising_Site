@extends('layouts.app')
@section('content')
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-dark text-left p-5">
              <h2>Вхід</h2>
              <h4 class="font-weight-light">Заповніть всі поля.</h4>
              <form class="col-md-12 col-lg-12 col-sm-12 col-xs-12 forms-sample" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
                <div class="form-group row">
                  <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                    <div class="col-md-12">
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>
                      <div class="col-md-12">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                          <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                    </div>
                    </div>
                    <div class="form-group row mb-0">
                      <div class="col-md-12">
                        <button id='card_submit' type="submit" class="btn btn-primary">
                        {{ __('Увійти') }}
                        </button>
                       </div>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
