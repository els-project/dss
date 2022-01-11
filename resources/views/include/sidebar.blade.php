<nav class="pcoded-navbar">
  <div class="pcoded-inner-navbar main-menu">
      <div class="pcoded-navigatio-lavel">Navigation</div>
      <ul class="pcoded-item pcoded-left-item">
        <li class="active pcoded-trigger">
          <a href="{{ url('dashboard') }}">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
          </a>
        </li>
      </ul>
      
      <div class="pcoded-navigatio-lavel">Data</div>
      <ul class="pcoded-item pcoded-left-item">
        <li class=" ">
          <a href="{{ url('data-alternatif')}}">
            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
            <span class="pcoded-mtext" >Data Alternatif</span>
          </a>
        </li>
      </ul>
      <ul class="pcoded-item pcoded-left-item">
        <li class=" ">
          <a href="{{ url('data-kriteria')}}">
            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
            <span class="pcoded-mtext" >Data Kriteria</span>
          </a>
        </li>
      </ul>
      <ul class="pcoded-item pcoded-left-item">
        <li class=" ">
          <a href="{{ url('data-nilai')}}">
            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
            <span class="pcoded-mtext" >Data Nilai</span>
          </a>
        </li>
      </ul>
      <ul class="pcoded-item pcoded-left-item">
        <li class=" ">
          <a href="{{ url('hitung')}}">
            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
            <span class="pcoded-mtext" >Hasil</span>
          </a>
        </li>
      </ul>
      <div class="pcoded-navigatio-lavel">Logout</div>
      <ul class="pcoded-item pcoded-left-item">
        <li class=" ">
           <a href="{{ url('/logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span>
                    Logout
            </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </div>
</nav>