<div class="row">
  <div class="col-lg-12">
    <!-- tab header start -->
    <div class="tab-header card">
      <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="tabs-data-nilai">
        <li class="nav-item">
          <a class="nav-link active" data-tabs="all" data-toggle="tab" href="#personal" role="tab"></a>
          <div class="slide"></div>
        </li>
        
      </ul>
    </div>
    <!-- tab header end -->

    <!-- tab content start -->
    <div class="tab-content">
      <!-- tab panel personal start -->
      <div class="tab-pane active" id="personals" role="tabpanel">
        @include('halaman.data_nilai.table-data-nilai')
      </div>
      <!-- tab pane personal end -->
    </div>
    <!-- tab content end -->
  </div>
</div>