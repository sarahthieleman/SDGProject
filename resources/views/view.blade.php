@extends('layouts.app')

@section('content')
    <script>
        var waardes = '{!! json_encode($opleiding_waardes, JSON_HEX_TAG) !!}';
        console.log(waardes);
    </script>
    <div class="container">
        <div class="card">
            <div class="card-header">{{$opleiding->name}} | <a href="{{url('/home')}}">Terug</a></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>SDG Grafiek</h2>
                        <div id="chartdiv"></div>
                        <div>
                            <br>
                            <h2>Projecten</h2>
                            <br>
                            @if(count($projecten) == 0)
                                <i>Deze opleiding heeft op dit moment geen lopende projecten.</i><br>
                                @else
                                <ul>
                                @foreach($projecten as $p)
                                    <li>{{$p->name}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/piegraph.js') }}"></script>
    @endsection



