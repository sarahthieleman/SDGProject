@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/slider.js') }}" defer></script>
    <div class="container">
        <div class="card">
            <div class="card-header">Opleiding bewerken | <a href="{{url('/adminpanel')}}">Terug</a></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{$opleiding->name}}</h2>
                        <form action="{{route('opleiding_update')}}" method="POST">
                            <input type="hidden" name="opleiding_id" value="{{$opleiding->id}}" />
                            {{csrf_field()}}
                            <table>
                            <tr>
                                <td>Poverty: </td> <td><input type="range" name="poverty" min="0" max="5" value={{$values->poverty}} placeholder={{$values->poverty}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->poverty}}</td>
                            </tr>
                            <tr>
                                <td>Hunger: </td><td> <input type="range" name="hunger" min="0" max="5" value={{$values->hunger}} placeholder={{$values->hunger}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->hunger}}</td>
                            </tr>
                            <tr>
                                <td>Health:</td> <td> <input type="range" name="health" min="0" max="5" value={{$values->health}} placeholder={{$values->health}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->health}}</td>
                            </tr>
                            <tr>
                                <td>Education:</td> <td> <input type="range" name="education" min="0" max="5" value={{$values->education}} placeholder={{$values->education}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->education}}</td>
                            </tr>
                            <tr>
                                <td>Gender equality:</td> <td> <input type="range" min="0" max="5" name="gender_equality" value={{$values->gender_equality}} placeholder={{$values->gender_equality}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->gender_equality}}</td>
                            </tr>
                            <tr>
                                <td>Clean water:</td> <td><input type="range" min="0" max="5" name="clean_water" value={{$values->clean_water}} placeholder={{$values->clean_water}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->clean_water}}</td>
                            </tr>
                            <tr>
                                <td>Energy:</td> <td><input type="range" min="0" max="5" name="energy" value={{$values->energy}} placeholder={{$values->energy}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->energy}}</td>
                            </tr>
                            <tr>
                                <td>Economic growth:</td> <td><input type="range" min="0" max="5" name="economic_growth" value={{$values->economic_growth}} placeholder={{$values->economic_growth}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->economic_growth}}</td>
                            </tr>
                            <tr>
                                <td>Infrastructure:</td> <td><input type="range" min="0" max="5" name="infrastructure" value={{$values->infrastructure}} placeholder={{$values->infrastructure}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->infrastructure}}</td>
                            </tr>
                            <tr>
                                <td>Reduced inequalities:</td> <td> <input type="range" min="0" max="5" name="reduced_inequalities" value={{$values->reduced_inequalities}} placeholder={{$values->reduced_inequalities}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->reduced_inequalities}}</td>
                            </tr>
                            <tr>
                                <td>Sustainable cities:</td> <td><input type="range" min="0" max="5" name="sustainable_cities" value={{$values->sustainable_cities}} placeholder={{$values->sustainable_cities}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->sustainable_cities}}</td>
                            </tr>
                            <tr>
                                <td>Durability:</td> <td><input type="range" min="0" max="5" name="durability" value={{$values->durability}} placeholder={{$values->durability}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->durability}}</td>
                            </tr>
                            <tr>
                                <td>Climate:</td> <td><input type="range" min="0" max="5" name="climate" value={{$values->climate}} placeholder={{$values->climate}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->climate}}</td>
                            </tr>
                            <tr>
                                <td>Water life:</td> <td> <input type="range" min="0" max="5" name="water_life" value={{$values->water_life}} placeholder={{$values->water_life}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->water_life}}</td>
                            </tr>
                            <tr>
                                <td>Land life:</td> <td> <input type="range" min="0" max="5" name="land_life" value={{$values->land_life}} placeholder={{$values->land_life}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->land_life}}</td>
                            </tr>
                            <tr>
                                <td>Peace:</td> <td><input type="range" min="0" max="5" name="peace" value={{$values->peace}} placeholder={{$values->peace}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->peace}}</td>
                            </tr>
                            <tr>
                                <td>Partnership:</td> <td> <input type="range" min="0" max="5" name="partnership" value={{$values->partnership}} placeholder={{$values->partnership}}> </td>
                                <td class="slidervalue">&nbsp;&nbsp;{{$values->partnership}}</td>
                            </tr>
                            </table>
                            <br>
                            <label for="contact">Contact (E-Mail)</label>
                            <br>
                            <input width="10%" name="contact" id="contact" type="text" placeholder="{{$opleiding->contact}}" value="{{$opleiding->contact}}" />
                            <br><br>
                            <button class="btn btn-success" type="submit">Opslaan</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection