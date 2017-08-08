@extends('layouts.app')

@section('content')
    <h1>Saved Recipes</h1>
    @if(count($searches) > 0)
        @foreach($searches as $search)
            <div id="imagegrid">
                <div class="item">
                    <a href="/selectsaved/{{$search->recipe_id}}"><img class="image" src="{{$search->image}}"/></a>
                    <a href="/selectsaved/{{$search->recipe_id}}"><h4>{{$search->title}}</h4></a>
                     {{--<p>{{$search->recipe_id}}</p>--}}
                </div>
            </div>
        @endforeach
    @else
        <p>No Recipes Saved</p>
    @endif
    <div class="display">

    </div>
@endsection