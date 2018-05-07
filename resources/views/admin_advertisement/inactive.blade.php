@extends('layouts.app')
@section('content')
    <div class="container-scroller">
        <div id='inactive_main_panel' class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            @foreach($inactiveAdv as $value)
                            <div class="card-body" id="admAdvCardBody">
                                <h4 id='adm_adv_title' class="card-title"> Створено - {{$value->user->surname . ' ' . $value->user->name}}
                                    @if(!empty($value->created_at))
                                        , {{$value->created_at}}
                                    @endif
                                </h4>
                                <h5> Заголовок - {{$value->title}}</h5>
                                <div>
                                    <ul id='admin_show_image'>
                                        @foreach($value->advimages as $image)
                                            <li>
                                                <img src="{{URL::to(Storage::url($image->image))}}" alt="">
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <table class="minTable table table-bordered">
                                    <thead>
                                    <th>
                                        Опис
                                    </th>
                                    </thead>
                                    <tbody>
                                        <tr class="table-success">
                                            <td style='overflow-y: scroll;'>
                                                {{$value->description}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="minTable table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            Категорія
                                        </th>
                                        <th>
                                            Вартість
                                        </th>
                                        <th>
                                            Стан
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="table-info">
                                        <td>
                                            @if(!empty($value->category->category))
                                                {{$value->category->category}}
                                            @endif
                                        </td>
                                        <td>
                                            {{$value->price}}
                                        </td>
                                        <td>
                                           {{$value->condition}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <form id="activate" method="POST" action="{{ url('/admin_advertisement/inactive/'. $value->id )  }}">
                                    {{method_field('PATCH')}}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-success">Активувати</button>
                                </form>
                                <form id="deatroyAdvAdm" action="{{ url('/admin_advertisement/inactive/'.$value->id) }}" method="POST" style="display: inline">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <button type="submit" class="btn btn-danger" >Видалити</button>
                                </form>
                            </div><hr>
                            @endforeach
                            <div style="text-align: center;margin: auto;">
                                {!! $inactiveAdv->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection