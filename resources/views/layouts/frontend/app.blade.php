<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Trimatrix Lab">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <title>Hakim | Curriculum Vitae</title>
    <link rel="icon" href="{{ asset('/ax/images/fav-icon.png') }}">

    <!--APPLE TOUCH ICON-->
    <link rel="apple-touch-icon" href="{{ asset('/ax/images/apple-touch-icon.png') }}">


    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>


    <!-- MATERIAL ICON FONT -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="{{ asset('/ax/css/font-awesome.min.css') }}" rel="stylesheet">


    <!-- ANIMATION -->
    <link href="{{ asset('/ax/css/animate.min.css') }}" rel="stylesheet">


    <!-- MATERIALIZE -->
    <link href="{{ asset('/ax/css/materialize.css') }}" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="{{ asset('/ax/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- CUSTOM STYLE -->
    <link href="{{ asset('/ax/css/style.css') }}" id="switch_style" rel="stylesheet">

</head>
<body>

    @yield('content')

<!-- ================== SCRIPTS ================== -->
<script src="{{ asset('/ax/js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('/ax/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/ax/js/materialize.min.js') }}"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR API KEY"></script> --}}
<script src="{{ asset('/ax/js/markerwithlabel.min.js') }}"></script>
<script src="{{ asset('/ax/js/retina.min.js') }}"></script>
<script src="{{ asset('/ax/js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('/ax/js/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('/ax/js/custom.js') }}"></script>


</body>
</html>
