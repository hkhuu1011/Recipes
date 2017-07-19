@extends('layouts.app')

@section('content')
    <h1>Search for Recipes</h1>
    {{--Grabbing search value for URL api--}}
    {{--<form action="/searchrecipes" method="GET">--}}
    {{--<div class="form-group">--}}
        {{--<input type="text" name="ingredients"/>--}}
        {{--<button type="submit">Submit</button>--}}
    {{--</div>--}}
    {{--</form>--}}

    {!! Form::open(['action'=>'SearchController@searchrecipes', 'method' => 'GET']) !!}
        <div class="form-group">
            {{Form::label('title', 'Add Ingredients')}}
            {{Form::text('ingredients', '', ['class' => 'form-control', 'placeholder' => 'What\'s in your house...'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}

{{--Posting to database--}}
    {{--{!! Form::open(['action'=>'SearchController@store', 'method' => 'POST']) !!}--}}
        {{--<div class="form-group">--}}
            {{--{{Form::label('title', 'Add Ingredients')}}--}}
            {{--{{Form::text('ingredients', '', ['class' => 'form-control', 'placeholder' => 'What\'s in your house...'])}}--}}
        {{--</div>--}}
        {{--{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}--}}
    {{--{!! Form::close() !!}--}}
@endsection