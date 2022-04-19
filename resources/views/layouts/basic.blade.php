
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>POS Application @yield('title')</title>  
  <link rel="manifest" href="{{asset('mix-manifest.json')}}">
  <link rel="icon" type="image/png" href="{{asset('logo/logonew.png')}}" />  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::to('plugins/css/toastr.min.css') }}">  
  <link href="{{ asset('plugins/OverlayScrollbars.min.css') }}" rel="stylesheet">  
  <link href="{{ asset('frontend/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/bootstrap-datepicker.min.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('frontend/css/mdtimepicker.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('plugins/css/select2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  @yield('othercss')
  @stack('style')
  @livewireStyles
</head>
<body class="@yield('bgclass')">
    <div id="app">
     @yield('content')
    </div>
    <script src="{{URL::to('js/app.js')}}"></script>
    <script src="{{URL::to('js/adminsrcipts.js')}}"></script>
    @yield('otherjs')
</body>
</html>