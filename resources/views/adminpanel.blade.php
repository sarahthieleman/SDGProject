@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Admin Panel</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Opleidingen</th>
                                <th>Onderzoekgroep</th>
                                <th>Acties</th>
                                <th>&nbsp;</th>
                            </tr>
                            </thead>
                            @foreach($opleidingen as $o)
                                <tr>
                                    <td width="20%%">
                                        <a href="{{url('graph/'.$o->id)}}">{{$o->name}}</a>
                                    </td>
                                    <td width="20%%">
                                        {{$o->getGroup()->name}}
                                    </td>
                                    <td width="1%">
                                        <form action="{{route('opleiding_edit')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="opleiding_id" value="{{$o->id}}">
                                            <button class="btn btn-link" type="submit"><i class="fa fa-edit"></i></button>
                                        </form>
                                    </td>
                                    <td width="1%">
                                        <form action="{{route('opleiding_edit')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="opleiding_id" value="{{$o->id}}">
                                            <button class="btn btn-link" type="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
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

