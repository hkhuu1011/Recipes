@extends('layouts.app')

@section('content')
    <h1>Selected Recipe</h1>
    {{--{{dd($selected)}}--}}
    {{--{{$selected}}--}}
    {{--@foreach($selected as $select)--}}
        {{--<div id="masonry">--}}
            {{--<div class="item">--}}
        <div id="recipeInfo">
            <img class="recipeImg" src="{{ $selected->image }}"/>
                <div class="recipeText">
                    <h2>{{ $selected->title }}</h2>
                    <h4>{{ $selected->instructions }}</h4>
                </div>
        </div>
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}

@endsection