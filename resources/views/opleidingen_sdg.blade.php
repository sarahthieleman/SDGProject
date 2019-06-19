@extends('layouts.app')

@section('content')
    <div class="container-fluid">
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
                                <li><a href="{{url('/sdgoverview/1')}}"><img width="120px" height="120px" src='{{url("/img/goal01.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/2')}}"><img width="120px" height="120px" src='{{url("/img/goal02.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/3')}}"><img width="120px" height="120px" src='{{url("/img/goal03.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/4')}}"><img width="120px" height="120px" src='{{url("/img/goal04.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/5')}}"><img width="120px" height="120px" src='{{url("/img/goal05.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/6')}}"><img width="120px" height="120px" src='{{url("/img/goal06.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/7')}}"><img width="120px" height="120px" src='{{url("/img/goal07.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/8')}}"><img width="120px" height="120px" src='{{url("/img/goal08.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/9')}}"><img width="120px" height="120px" src='{{url("/img/goal09.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/10')}}"><img width="120px" height="120px" src='{{url("/img/goal10.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/11')}}"><img width="120px" height="120px" src='{{url("/img/goal11.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/12')}}"><img width="120px" height="120px" src='{{url("/img/goal12.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/13')}}"><img width="120px" height="120px" src='{{url("/img/goal13.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/14')}}"><img width="120px" height="120px" src='{{url("/img/goal14.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/15')}}"><img width="120px" height="120px" src='{{url("/img/goal15.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/16')}}"><img width="120px" height="120px" src='{{url("/img/goal16.png")}}' alt="no logo"></a></li>
                                <li><a href="{{url('/sdgoverview/17')}}"><img width="120px" height="120px" src='{{url("/img/goal17.png")}}' alt="no logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection