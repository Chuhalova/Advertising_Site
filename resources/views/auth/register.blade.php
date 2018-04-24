@extends('layouts.app')
@section('content')
 <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth register-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <h4>Зареєструватись</h4>
              <h5 class="font-weight-light">Заповніть всі поля</h5>
              <form class="col-md-12 col-lg-12 col-sm-12 col-xs-12 forms-sample" method="POST" action="{{ route('register') }}">
               @csrf
                <div class="form-group">
                 <label for="name">{{ __("Ім'я") }}</label>
                 <input minlength = '2' maxlength="30" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                 @if ($errors->has('name'))
                  <span class="invalid-feedback">
                   <strong>{{ $errors->first('name') }}</strong>
                  </span>
                 @endif
                </div>
                <div class="form-group">
                 <label for="surname">{{ __("Прізвище") }}</label>
                  <input minlength = '2' maxlength="30" id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"  name="surname" value="{{ old('surname') }}" required>
                   @if ($errors->has('surname'))
                    <span class="invalid-feedback">
                     <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                   @endif
                 </div>
                 <div class="form-group">
                  <label for="email">{{ __('E-Mail') }}</label>
                  <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required >
                  @if ($errors->has('email'))
                   <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                   </span>
                  @endif
                 </div>
                 <div class="form-group">
                  <label for="phone">{{ __('Контактний номер') }}</label>
                  <input placeholder="0**********" id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" pattern="[0-9]{10}" required>
                  @if ($errors->has('phone'))
                  <span class="invalid-feedback">
                   <strong>{{ $errors->first('phone') }}</strong>
                  </span>
                  @endif
                 </div>
                 <div class="form-group">
                  <label for="password" >{{ __('Пароль') }}</label>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength = '6' maxlength="30" required>
                  @if ($errors->has('password'))
                  <span class="invalid-feedback">
                   <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group">
                 <label for="password-confirm">{{ __('Підтвердження паролю') }}</label>
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength = '6' maxlength="30" required>
                </div>
                <button style='text-align:center!important;' type="submit" class="btn btn-block btn-primary btn-lg">Уперед!</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
