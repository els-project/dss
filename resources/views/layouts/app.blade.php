<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SELEKSI PEGAWAI') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css2/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    
</head>

    <div id="app">

        <nav class="navbar dark navbar-dark navbar-static-top " style="background-color:#333333">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff000">
                        {{ config('app.name', 'Seleksi Pegawai') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}" style="color: #fff000">Login</a></li>
                            <!-- <li><a href="{{ url('/register') }}" style="color: #fff000">Register</a></li> -->
                            <li><a href="{{ url('/landing') }}" style="color: #fff000">Tentang Kami</a></li>
                            <li><a href="{{ url('/visi') }}" style="color: #fff000">Visi dan Misi Kami</a></li>
                            <li><a href="{{ url('/galeri') }}" style="color: #fff000">Galeri</a></li>
                            <li><a href="{{ url('/regis') }}" style="color: #fff000">Pendaftaran</a></li>
                        @else
                        <li><a href="{{ url('/sepeda') }}" style="margin-right:100px">Dashboard</a></li>
                         <li><a href="{{ url('/data-sepeda') }}" style="margin-right:100px">Kelola Sepeda</a></li>
                          <li><a href="{{ url('/data-kriteria') }}" style="margin-right:100px ">Kelola Kriteria</a></li>
                           <li><a href="{{ url('/data-rasio') }}" style="margin-right:100px ">Data Rasio</a></li>
                           <li><a href="{{ url('/rekomendasi') }}" style="margin-right:100px ">Rekomendasi</a></li>
                           <li><a href="{{ url('/kriteria') }}" style="margin-right:100px ">Laporan</a></li>
                         
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>

                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
