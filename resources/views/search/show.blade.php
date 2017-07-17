@extends('layouts.app')

@section('content')
    <h1>{{ $selected->title }}</h1>
{{--    {{dd($data)}}--}}
    {{--{{dd($selected)}}--}}
    {{--{{dd($selected->analyzedInstructions[0]->steps[0]->number)}}--}}
{{--    {{dd($selected->analyzedInstructions[0]->steps[0]->step)}}--}}
        <div id="recipeInfo">
            <img class="recipeImg" src="{{ $selected->image }}"/>
                <div class="recipeText">
                    <h2>Step-by-Step Instructions</h2>
                    <p>Total Time: {{ $selected->readyInMinutes }} minutes</p>

                    {{$selected->sourceUrl}}

                    <hr>

                    <ol>
                        @foreach($selected->analyzedInstructions[0]->steps as $step)
                                {{$step->number}}. {{$step->step}} <br><br>
                        @endforeach
                    </ol>


                </div>
        </div>
    {{--@endforeach--}}

@endsection