@extends('layouts.app')

@section('content')
    <h1>{{ $selected->title }}</h1>
    {{--{{dd($data)}}--}}
    {{--{{dd($selected)}}--}}
        <div id="recipeInfo">
            <img class="recipeImg" src="{{ $selected->image }}"/>
                <div class="recipeText">
                    @if($selected->vegetarian === true)
                        vegetarian
                    @else
                        not vegetarian
                    @endif

                    <p><strong>Total Time: {{ $selected->readyInMinutes }} minutes</strong>
                    <br>
                    Preparation: {{ $selected->preparationMinutes }} minutes
                    <br>
                    Cooking: {{ $selected->cookingMinutes }} minutes
                    <br>
                    Servings: {{$selected->servings}}</p>

                    Source: <a href="{{$selected->sourceUrl}}" target="_blank">{{$selected->sourceName}}</a>

                    <hr>

                    <h2>Ingredients</h2>
                    @foreach($selected->extendedIngredients as $ingredient)
                        {{$ingredient->originalString}} <br>
                    @endforeach

                    <hr>

                    <h2>Step-by-Step Instructions</h2>
                    <ol>
                        @foreach($selected->analyzedInstructions[0]->steps as $step)
                                {{$step->number}}. {{$step->step}} <br><br>
                        @endforeach
                    </ol>

                    <hr>

                    <h2>Nutritional Information</h2>
                    @foreach($selected->nutrition->nutrients as $nutrition)
                        {{$nutrition->amount}} {{$nutrition->unit}} {{$nutrition->title}}<br>
                    @endforeach

                </div>
        </div>

@endsection