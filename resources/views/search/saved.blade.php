@extends('layouts.app')

@section('content')
    <h1>Saved Recipes</h1>
    @if(count($searches) > 0)
        @foreach($searches as $search)
            <div id="imagegrid">
                <div class="item">
                    <img class="image" src="{{$search->image}}"/>
                    <h4>{{$search->title}}</h4>
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