@extends('layouts.app')

@section('content')
    <script>
        var waardes = '{!! json_encode($opleiding_waardes, JSON_HEX_TAG) !!}';
        console.log(waardes);
    </script>
    <div class="container">
        <div class="card">
            <div class="card-header">Graph</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/piegraph.js') }}"></script>
    @endsection



