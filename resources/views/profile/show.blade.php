@extends('layouts.app')
@section('content')
  <div class="content-wrapper">
<div class="row">
    <div class="col-12">
        <div class="card-body">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Профіль</h5>
              <button type="button" class='btn btn-default' name="button"><span class='glyphicon glyphicon-star-empty'></span></button>

              <div class="row d-flex align-items-center justify-items-center flex-column">
                <div class="text-center">
                  <img src="../images/faces/face8.jpg" class="rounded-circle" width="100" height="100" />
                </div>
                <div class="text-center mt-3">
                  <i class="fa fa-quote-right icon-grey-big"></i>
                </div>
                <p class="font-italic text-muted mt-3 mb-4 text-center">
                  Your products, all the kits that I have downloaded from your site and worked with are sooo cool!. Keep up the great work!
                </p>
                <h5 class="text-center bolder">{{$user->surname. ' ' . $user->name}}</h5>
                <h6 class="text-center text-muted">Co-founder</h6>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
