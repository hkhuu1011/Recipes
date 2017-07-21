<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Recipes') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

    <script>
//        $('.grid').masonry({
//            itemSelector: '.grid-item',
//            columnWidth:200
//        })

//                var container = document.querySelector('#masonry');
//        var masonry = new Masonry(container, {
//            columnWidth: 50,
//            itemSelector: '.item'
//        });

var test = $('#masonry').masonry({
    itemSelector: '.item',
    percentPosition: true,
    columnWidth: 200
});
// layout Masonry after each image loads
test.imagesLoaded().progress( function() {
    test.masonry();
});

    </script>

</body>
</html>
