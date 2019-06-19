@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sustainable Development Goals</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container-opleidingen">
                            <ul>
                                <li><img width="120px" height="120px" src='{{url("/img/goal01.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal02.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal03.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal04.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal05.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal06.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal07.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal08.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal09.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal10.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal11.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal12.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal13.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal14.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal15.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal16.png")}}' alt="no logo"></li>
                                <li><img width="120px" height="120px" src='{{url("/img/goal17.png")}}' alt="no logo"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection