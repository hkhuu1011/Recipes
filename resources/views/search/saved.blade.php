@extends('layouts.app')

@section('content')
    <h1>Saved Recipes</h1>
    {{--@if(count($searches) > 0)--}}
        {{--@foreach($searches as $search)--}}
             {{--<p>{{$search->recipe_id}}</p>--}}
        {{--@endforeach--}}
    {{--@else--}}
        {{--<p>No Recipes Saved</p>--}}
    {{--@endif--}}
    <div class="display">
<!--        --><?php
//            $recipeId = "SELECT * FROM searches";
//            $result = mysqli_query($conn, $recipeId);
//            if(mysqli_num_rows($result) > 0) {
//                while ($row = mysqli_fetch_assoc($result )) {
//                    echo "<p>";
//                    echo $row['recipe'];
//                    echo "</p>";
//                }
//            } else {
//                echo "There are no recipes saved";
//            }
//        ?>

    </div>
@endsection