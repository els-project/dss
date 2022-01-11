<!-- Page-header start -->
<div class="page-header">
  <div class="row align-items-end">
    <div class="col-lg-8">
      <div class="page-header-title">
        <div class="d-inline">
          <h4>@yield('title-breadcrumb')</h4>
          <span>@yield('subtitle-breadcrumb')</span>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
          <li class="breadcrumb-item">
              <a href="{{ url('/') }}"> <i class="feather icon-home"></i> </a>
          </li>
          <li class="breadcrumb-item"><a href="">@yield('breadcrumb-1')</a>
          </li>
          <li class="breadcrumb-item"><a href="#!">@yield('breadcrumb-2')</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Page-header end -->