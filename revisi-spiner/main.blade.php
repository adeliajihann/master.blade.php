<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('template/dist/img/logo.png') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  
  @include('p_part.asset')
</head>
@include('p_part.header')
@include('p_part.sidebar')
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper"> 
<div class="content-wrapper">
    @yield('container')
</div>
  @include('p_part.footer')
  @stack('footer-script')
</body>
</html>
