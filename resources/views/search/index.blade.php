@extends('layouts.app')

@section('content')
    <h1>Recipes</h1>
    @if(count($search) > 0)
        @foreach($search as $item)
        <div id="masonry">
            <div class="item">
                <a href="/selectedrecipe/{{$item->id}}"><img class="image" src="{{ $item->image }}"/></a>
                <a href="/selectedrecipe/{{$item->id}}"><h4>{{$item->title}}</h4></a>
            </div>
        </div>
        @endforeach
    @else
        <p>Not Found</p>
    @endif

@endsection