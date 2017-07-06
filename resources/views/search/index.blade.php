@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>
    @if(count($search) > 0)
        @foreach($search as $search)
            <div class="well">
                <h3>{{$search->ingredients }}</h3>
            </div>
        @endforeach
    @else
        <p>Not Found</p>
    @endif

@endsection