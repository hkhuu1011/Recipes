@extends('layouts.app')

@section('content')
    <h1>Search for Recipes</h1>
    {!! Form::open(['action'=>'SearchController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Add Ingredients')}}
            {{Form::text('ingredients', '', ['class' => 'form-control', 'placeholder' => 'What\'s in your house...'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection