<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Onsite</title>

<!-- Fav Icon -->
<link rel="icon" href="{{URL::asset("home_assets/assets/images/favicon.ico")}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{URL::asset('home_assets/assets/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/flaticon.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/owl.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/bootstrap.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/jquery.fancybox.min.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/animate.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/imagebg.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/global.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/header.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/color.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/style.css")}}" rel="stylesheet">
<link href="{{URL::asset("home_assets/assets/css/responsive.css")}}" rel="stylesheet">

</head>

<body class="boxed_wrapper">


    @include('home-layouts.home-layout-header')
        @yield("home-content")
    @include('home-layouts.home-layout-footer')





        



<!-- jquery plugins -->
<script src="{{URL::asset("home_assets/assets/js/jquery.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/popper.min.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/bootstrap.min.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/owl.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/wow.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/validation.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/jquery.fancybox.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/appear.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/jquery.countTo.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/scrollbar.js")}}"></script>
<script src="{{URL::asset("home_assets/assets/js/tilt.jquery.js")}}"></script>

<!-- main-js -->
<script src="{{URL::asset("home_assets/assets/js/script.js")}}"></script>
</body>
</html>
