@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/slider.js') }}" defer></script>
    <div class="container">
        <div class="card">
            <div class="card-header">Project toevoegen | <a href="{{url('/adminpanel')}}">Terug</a></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{$opleiding->name}} | Project toevoegen</h2>
                        <form action="{{route('project_create')}}" method="POST">
                            <input type="hidden" name="opleiding_id" value="{{$opleiding->id}}" />
                            <br>
                            {{csrf_field()}}
                            <label for="name">Projectnaam</label>
                            <br>
                            <input width="10%" name="name" id="name" type="text" placeholder="Projectnaam" />
                            <br><br>
                            <button class="btn btn-success" type="submit">Toevoegen</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection