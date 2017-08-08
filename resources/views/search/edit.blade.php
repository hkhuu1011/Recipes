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

            {{--Save Recipe Button--}}
            {{--{{Form::submit('Save', ['class'=>'btn btn-danger'])}} --}}
            {{--<a href="{{url('/notes/' . $selected->id . '/' . $selected->recipe_id . '/' . $selected->notes)}}" class="btn btn-danger notes">Add Notes!</a>--}}

            {{--Modal to add notes--}}
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                Add Notes!
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modify Your Recipe</h4>
                        </div>
                        <div class="modal-body">
                            {{--Input box--}}
                            <div class="form-group">
                                <label for="comment">Add Changes:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            {{--<button type="button" class="btn btn-danger">Save Changes</button>--}}
                            <a href="
{{--{{url('/notes/' . $selected->id . '/' . $selected->recipe_id . '/' . $selected->notes)}}--}}
                                    " class="btn btn-danger notes">Save Changes</a>
                        </div>
                    </div>
                </div>
            </div>



            <br><br>

            {{--Displaying time, servings and source--}}
            <div class="prepInfo">
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
            </div>

            <hr>

            {{--Listing Ingredients--}}
            <div class="ingredients">
                <h2>Ingredients</h2>
                @foreach($selected->extendedIngredients as $ingredient)
                    {{$ingredient->originalString}} <br>
                @endforeach
            </div>

            <hr>

            {{--Listing Instructions--}}
            <div class="instructions">
                <h2>Instructions</h2>
                <ol>
                    @foreach($selected->analyzedInstructions[0]->steps as $step)
                        {{$step->number}}. {{$step->step}} <br>
                    @endforeach
                </ol>
            </div>

            <hr>

            {{--Listing Nutritional Information--}}
            <div class="nutritionalInfo">
                <h2>Nutritional Information</h2>
                @if(isset($selected->nutrition->nutrients))
                    @foreach($selected->nutrition->nutrients as $nutrition)
                        {{$nutrition->amount}} {{$nutrition->unit}} {{$nutrition->title}}<br>
                        {{--                        @if($selected->nutrition->nutrients[7])--}}
                        {{--@break($selected->nutrition->nutrients[7]);--}}
                        {{--@endif--}}
                    @endforeach
                @endif
            </div>

        </div>
    </div>
@endsection