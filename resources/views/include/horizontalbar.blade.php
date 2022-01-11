<nav class="pcoded-navbar">
  <div class="pcoded-inner-navbar">
    <ul class="pcoded-item pcoded-left-item">
      <li class="pcoded-hasmenu">
        <a href="{{ url('/') }}">
          <span class="pcoded-micon"><i class="feather icon-home"></i></span>
          <span class="pcoded-mtext">Dashboard</span>
        </a>
      </li>
      <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-briefcase"></i></span>
            <span class="pcoded-mtext">Antrian Makan</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
          <li class="active">
            <a href="{{ url('/antrian-makan') }}">
              <span class="pcoded-micon"><i class="feather icon-box"></i></span>
              <span class="pcoded-mtext" >Antrian Scan Barcode</span>
            </a>
          </li>
          <li class="">
            <a href="{{ url('/data-generate') }}">
              <span class="pcoded-micon"><i class="feather icon-box"></i></span>
              <span class="pcoded-mtext" >Data Generate Makan</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="pcoded-hasmenu">
        <a href="javascript:void(0)">
            <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
            <span class="pcoded-mtext">Data Karyawan</span>
            <span class="pcoded-mcaret"></span>
        </a>
        <ul class="pcoded-submenu">
          <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
              <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
              <span class="pcoded-mtext" >Bootstrap Table</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="wrapper-btn f-right btn-generate">
      <button class="btn btn-info btn-outline-info"><i class="icofont icofont-ui-rotation"></i>Generate Antrian Makan</button>
    </div>
  </div>
</nav>