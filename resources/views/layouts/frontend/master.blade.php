<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Biz Listing | Kros Worx</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('frontend/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
</head>
<body>

@include('layouts.frontend.header')

@yield('content')

@include('layouts.frontend.footer')


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('frontend/js/mdb.min.js')}}"></script>
<!-- Initializations -->
<script type="text/javascript">
// Animations initialization
new WOW().init();
</script>
</body>

</html>