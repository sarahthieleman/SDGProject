@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{$name}} | <a href="{{url('/sdg')}}">Terug</a></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Opleidingen</th>
                                <th>Onderzoekgroep</th>
                                <th>Score</th>
                                <th>Contact</th>
                            </tr>
                            </thead>
                            @foreach($opleidingen as $o)
                                <tr>
                                    <td width="20%">
                                        {{$o->name}}
                                    </td>
                                    <td width="20%">
                                        {{$o->getGroup()->name}}
                                    </td>
                                    <td>
                                        <progress max="5" value="{{$scores[$o->id]}}"></progress>
                                        &nbsp;&nbsp;{{$scores[$o->id]}}
                                    </td>
                                    <td>
                                      <a href="mailto:{{$o->contact}}">{{$o->contact}}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection