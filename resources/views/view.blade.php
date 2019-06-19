<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="{{ URL::asset('css/graph.css') }}" />
        <title>Graph View</title>
    </head>
    <body>
    <h1>Graph Page</h1>
    <div id="chartdiv"></div>

        <script>

    var waardes = '{!! json_encode($opleiding_waardes, JSON_HEX_TAG) !!}';

    console.log(waardes);
    </script>

    <script src="{{ URL::asset('js/core.js') }}"></script>
    <script src="{{ URL::asset('js/charts.js') }}"></script>
    <script src="{{ URL::asset('js/animated.js') }}"></script>
    <script src="{{ URL::asset('js/piegraph.js') }}"></script>

    </body>
