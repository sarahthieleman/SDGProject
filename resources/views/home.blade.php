@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Opleidingen</h1>
                        <div class="container-opleidingen">
                            <ul>
                                <li><a href="#" class="btn-sdg">Bedrijfskunde</a></li>
                                <li><a href="#" class="btn-sdg">Bouwkunde</a></li>
                                <li><a href="#" class="btn-sdg">Chemie</a></li>
                                <li><a href="#" class="btn-sdg">Civiele Techniek</a></li>
                                <li><a href="#" class="btn-sdg">Commerciele Economie</a></li>
                                <li><a href="#" class="btn-sdg">Communicatie</a></li>
                                <li><a href="#" class="btn-sdg">Engineering</a></li>
                                <li><a href="#" class="btn-sdg">Finance & Control (Bedrijfseconomie)</a></li>
                                <li><a href="#" class="btn-sdg">HBO-ICT</a></li>
                                <li><a href="#" class="btn-sdg">Human Resource Management</a></li>
                                <li><a href="#" class="btn-sdg">International Business</a></li>
                                <li><a href="#" class="btn-sdg">Leraar Basisonderwijs</a></li>
                                <li><a href="#" class="btn-sdg">Logistics Engineering</a></li>
                                <li><a href="#" class="btn-sdg">Maritiem Officier</a></li>
                                <li><a href="#" class="btn-sdg">Pedagogiek</a></li>
                                <li><a href="#" class="btn-sdg">Social Work</a></li>
                                <li><a href="#" class="btn-sdg">Sportkunde</a></li>
                                <li><a href="#" class="btn-sdg">Technische Bedrijfskunde</a></li>
                                <li><a href="#" class="btn-sdg">Tourism Management</a></li>
                                <li><a href="#" class="btn-sdg">Verpleegkunde</a></li>
                                <li><a href="#" class="btn-sdg">Verpleegkunde & Verloskunde</a></li>
                                <li><a href="#" class="btn-sdg">Watermanagement/Aquatische Ecotechnologie</a></li>
                                <li><a href="#" class="btn-sdg">Watermanagement/Delta Management</a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
