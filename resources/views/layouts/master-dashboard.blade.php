
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>POS Application @yield('title')</title>
  <link rel="manifest" href="{{asset('mix-manifest.json')}}">
  <!-- Bootstrap CSS-->
  <link rel="icon" type="image/png" href="{{asset('logo/logonew.png')}}" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::to('plugins/css/toastr.min.css') }}">
  <link href="{{ asset('plugins/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/bootstrap-datepicker.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/mdtimepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/css/select2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  @yield('othercss')
  @stack('style')
  @livewireStyles
</head>
<body class="@yield('bgclass')">
<div class="wrapper" id="app">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-align-right"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item bg-info text-bolder font-weight-bolder rounded">
            <a class="nav-link btn-pos btn-md" href="#"><i class="fas fa-shopping-bag"></i><span> POS</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-compress-arrows-alt"></i>
            </a>
        </li>
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments"></i>
          <span class="badge badge-danger navbar-badge">0</span>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <div class="image">
                <img src="{{ Auth::user()->profileImage !=0? asset('storage/images/uploads/'.Auth::user()->profileImage): asset('images/backend/your-picture.png')}}"
                    alt="User Image" class="img-circle"  />
            </div>
            @foreach (Auth::user()->roles as $key =>$role)
              @if($loop->first)
                {{ $role->name }}
              @endif
            @endforeach
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header sitecolor2">
            <div class="user-header d-flex">
                <div class="avatar avatar-sm flex-nowrap flex-row">
                  <img src="{{ Auth::user()->profileImage !=0? asset('storage/images/uploads/'.Auth::user()->profileImage): asset('images/backend/your-picture.png')}}" alt="User Image" class="avatar-img rounded-circle" style="height: 3.5rem;">
                </div>
                  <div class="user-text flex-nowrap flex-row text-white">
                    <h6>{{ Auth::user()->FullName}}</h6>
                  <p class="text-info mb-0 mt-2 text-center">
                  @foreach (Auth::user()->roles as $key =>$role)
                    @if($loop->first)
                      {{ $role->name }}
                    @endif
                  @endforeach
                  </p>
                  </div>
            </div>
          </span>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="
              @if(Auth::user()->hasAnyRoles(['admin']))
                   {{-- {{route('user.profile', [Auth::id()])}} --}}
                   #
              @elseif(Auth::user()->hasAnyRoles(['customer']))
                {{-- {{ route('user.profile', [Auth::id()])}} --}}
                #
              @elseif(Auth::user()->hasAnyRoles(['staff']))
                  {{-- {{route('user.profile', [Auth::id()])}} --}}
                  #
              @endif"> <i class="fas fa-user mr-lg-4 mr-3"></i>My Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off mr-lg-4 mr-3"></i>{{ __('Logout') }}
            </a>
            <form action="{{ route('logout') }}" class="d-none" id="logout-form" method="POST">
                @csrf
            </form>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-check-double mr-lg-4 mr-3"></i> enable Darkmode
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
       <img alt="Logo" class="siteLogo" height="auto" src="{{ asset('logo/logonew.png') }}">
    </a>

    <!-- Sidebar -->
    <div class="sidebar px-0">
      <!-- Sidebar user panel (optional) -->
      <div class="info text-center user-panel mt-3 pt-2 text-center mx-auto" style="border-bottom: 0px;">

          <a href="#" class="d-block text-center p-0 text-white">{{ Auth::user()->FullName}}</a>

      </div>
      <!-- Sidebar Menu -->
      <x-site-sidebar />
      {{-- @include('components.site-sidebar') --}}
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header pb-0">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 @yield('dsltitle-class')">@yield('dshtitle')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Account</a></li> --}}
              {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
              @yield('breadcrumb')
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('summary')
        @yield('content')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <strong>Copyright ©
      @php
        $yrmade=2021;
        if($yrmade < Carbon\Carbon::now()->format('Y')) {
              echo $yrmade .' - '.  \Carbon\Carbon::now()->format('Y');
        }else{
         echo $yrmade;
        }
      @endphp <a href="{{ route('site-dashboard') }}" style="color:#1dc1f8;">  POS </a>.</strong> All rights reserved.
  </footer>
</div>
  {{-- @include('modals.load-all-guests') --}}
 @livewireScripts
 <script src="https://js.paystack.co/v1/inline.js"></script>
 <script src="{{URL::to('js/app.js')}}"></script>
 <script src="{{URL::to('plugins/jquery.overlayScrollbars.min.js')}}"></script>
 <script src="{{URL::to('plugins/select2.full.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset('plugins/number-divider.min.js')}}"></script>
 <script src="{{URL::to('frontend/bootstrap-datepicker.min.js')}}"></script>
 <script src="{{URL::to('js/dashboard.js')}}"></script>
 <script src="{{URL::to('js/adminsrcipts.js')}}"></script> 
 @yield('otherscript')
 @stack('script')
  <script>
    var isConnected;
    function checkInternetConnection(){
      $.get('/site/check_connection', function(data) {
        if (data.status==true) {
            // console.log(isConnected);
            isConnected=true;
        }else if (data.status==false) {
          isConnected=false;
          // console.log(isConnected);
        }
      });
      setTimeout(function() {
          checkInternetConnection();
      }, 2000);
      return isConnected;
    }
      (function($){
        $(".sidebar").overlayScrollbars({
            className : "os-theme-light",
            normalizeRTL         : true,
            paddingAbsolute      : false,
            autoUpdate           : null,
            autoUpdateInterval   : 33,
            clipAlways           : true,

            scrollbars : {
                visibility       : "auto",
                autoHide         : "leave",
                autoHideDelay    : 800,
                dragScrolling    : true,
                clickScrolling   : true,
                touchSupport     : true,
                snapHandle       : false
            }
        });
      })(jQuery);
    </script>
</body>
</html>
