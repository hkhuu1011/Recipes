@extends('layouts.app')

@section('content')
    <h1>{{ $selected->title }}</h1>
    {{--{{dd($data)}}--}}
{{--    {{dd($selected->nutrition->nutrients[7])}}--}}
        <div id="recipeInfo">
            <img class="recipeImg" src="{{ $selected->image }}"/>
                <div class="recipeText">

                    {{--Display dietary restriction icons--}}
                    <div class="dietaryRestrictions">
                        @if($selected->vegetarian === true)
                            <img width="40px" src="https://raw.githubusercontent.com/hkhuu1011/Recipes/master/public/img/vegetarian.png"/> Vegetarian
                        @else

                        @endif

                        @if($selected->vegan === true)
                            <img width="40px" src="https://raw.githubusercontent.com/hkhuu1011/Recipes/master/public/img/vegan.png"/> Vegan
                        @else

                        @endif

                        @if($selected->glutenFree === true)
                            <img width="40px" src="https://raw.githubusercontent.com/hkhuu1011/Recipes/master/public/img/gluten-free.png"/> Gluten-Free
                        @else

                        @endif

                        @if($selected->dairyFree === true)
                            <img width="40px" src="https://raw.githubusercontent.com/hkhuu1011/Recipes/master/public/img/dairy-free.png"/> Dairy-Free
                        @else

                        @endif
                    </div>

                    <br>

                    {{--Displaying time, servings and source--}}
                    <p><strong>Total Time: {{ $selected->readyInMinutes }} minutes</strong>

                    @if(isset($selected->preparationMinutes))
                        <br>Preparation: {{ $selected->preparationMinutes }} minutes
                    @endif


                    @if(isset($selected->preparationMinutes))
                        <br>Cooking: {{ $selected->cookingMinutes }} minutes
                    @endif

                    @if(isset($selected->servings))
                        <br>Servings: {{$selected->servings}}
                    @endif

                    @if(isset($selected->sourceUrl))
                        <br>Source: <a href="{{$selected->sourceUrl}}" target="_blank">
                                @if(isset($selected->sourceName))
                                    {{$selected->sourceName}}
                                @endif</a></p>
                    @endif

                    <hr>

                    {{--Listing Ingredients--}}
                    <h2>Ingredients</h2>
                    @foreach($selected->extendedIngredients as $ingredient)
                        {{$ingredient->originalString}} <br>
                    @endforeach

                    <hr>

                    {{--Listing Instructions--}}
                    <h2>Instructions</h2>
                    <ol>
                        @foreach($selected->analyzedInstructions[0]->steps as $step)
                                {{$step->number}}. {{$step->step}} <br><br>
                        @endforeach
                    </ol>

                    <hr>

                    {{--Listing Nutritional Information--}}
                    <h2>Nutritional Information</h2>
                    @foreach($selected->nutrition->nutrients as $nutrition)
                        {{$nutrition->amount}} {{$nutrition->unit}} {{$nutrition->title}}<br>
{{--                        @if($selected->nutrition->nutrients[7])--}}
                            {{--@break($selected->nutrition->nutrients[7]);--}}
                        {{--@endif--}}
                    @endforeach

                </div>
        </div>
@endsection