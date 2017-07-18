@extends('layouts.app')

@section('content')
    <h1>Randomized Recipes</h1>
    {{--{{dd($data)}}--}}
    @foreach($recipes as $item)
        <div id="masonry">
            <div class="item">
                <a href="/selectedrecipe/{{$item->id}}"><img class="image" src="{{ $item->image }}"/></a>
                <a href="/selectedrecipe/{{$item->id}}"><h4>{{ $item->title }}</h4></a>
            </div>
        </div>
    @endforeach



{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
