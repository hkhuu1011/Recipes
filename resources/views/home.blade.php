@extends('layouts.app')

@section('content')
    {{--{{dd($data)}}--}}
    @foreach($recipes as $item)
        <div id="masonry">
            <div class="item">
                <a href="/selectedrecipe"><img class="image" src="{{ $item->image }}"/></a>
                <a href="/selectedrecipe"><h4>{{ $item->title }}</h4></a>
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
