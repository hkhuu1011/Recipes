@extends('layouts.app')

@section('content')
    <h1>Recipes</h1>
    @if(count($search) > 0)
        @foreach($search as $item)
            <div class="well">
                <h3>{{$item->title }}</h3>
                <img src="{{ $item->image }}"/>
            </div>
        @endforeach
    @else
        <p>Not Found</p>
    @endif

@endsection