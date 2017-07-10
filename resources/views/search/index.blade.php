@extends('layouts.app')

@section('content')
    <h1>Recipes</h1>
    <div id="masonry">
    @if(count($search) > 0)
        @foreach($search as $item)
        <div id="masonry">
            <div class="item">
            {{--<div class="container">--}}
                {{--<div class="col-md-4 col-sm-4 col-xs-4">--}}
                    <img class="image" src="{{ $item->image }}"/>
                    <a href="/selectedrecipe"><h4>{{$item->title}}</h4></a>
                {{--</div>--}}
            {{--</div>--}}
            </div>
        </div>
        @endforeach
    @else
        <p>Not Found</p>
    @endif
    </div>

@endsection