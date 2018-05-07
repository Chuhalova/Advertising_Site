@extends('layouts.app')
@section('content')
    <div  class="container-scroller">
        <div  class="container-fluid page-body-wrapper full-page-wrapper">
            <div style='background-color:#fff!important;' class="content-wrapper d-flex align-items-center text-center error-page bg-primary">
                <div class="row flex-grow">
                    <div class="col-lg-7 mx-auto text-white">
                        <div class="row align-items-center d-flex flex-row">
                            <div class="col-lg-6 text-lg-right pr-lg-4">
                                <h1 class="display-1 mb-0" id="oops_par">Oops...</h1>
                            </div>
                            <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                                <h2 style='color:#08D419!important;'>ВИБАЧТЕ!</h2>
                                <h3 class="font-weight-light" style='color:#08D419!important;'>Немає активних оголошень.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
