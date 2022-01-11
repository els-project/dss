<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="vendor/adminty/assets/images/favicon.ico" type="image/x-icon">

    <title>@yield('title')</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Assets Stylesheet -->
    @include('shared.style')

    <!-- Custom Styles CSS -->
    @yield('custom-styles')
    

  </head>
  <body>
    @if(Session()->has('alert-success'))
      <div class="row" id="notif-alert">
        <div class="alert alert-success background-success">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled text-white"></i>
          </button>
          <strong>Success! </strong>  <code>{{Session::get('alert-success')}}</code>
        </div>
      </div>
    @endif  
    <!-- Pre-loader start -->
    @include('loader.theme-loader')
    <!-- Pre-loader end -->

    <!-- Containt & Section -->
    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <!-- Navbar -->
        @include('include.navbar')
        <!-- End Navbar -->

        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
            <!-- Sidebar Menu -->
            @include('include.sidebar')
            <!-- End Sidebar Menu -->
            <div class="pcoded-content">
              <div class="pcoded-inner-content">
                @yield('loader')
                <div class="main-body">
                  <div class="page-wrapper">

                    @include('breadcrumb.breadcrumb')

                    <div class="page-body">
                      <!-- Content & Section Body -->
                      @yield('content')
                      <!-- End Content & Section Body -->
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Modals -->
    @yield('modals')

    <!-- Assets Javascripts -->
    @include('shared.scripts')
    <!-- End Assets Javascripts -->
    
    
    <!-- Assets Javascript -->
    @yield('custom-scripts')

    <!-- Custom Scripts -->
    @include('shared.custom-scripts')
    <!-- End Custom Scripts -->

  </body>
</html>