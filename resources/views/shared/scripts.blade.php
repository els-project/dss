<script type="text/javascript" src="/vendor/adminty/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="/vendor/adminty/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/vendor/adminty/bower_components/popper/js/popper.min.js"></script>
<script type="text/javascript" src="/vendor/adminty/bower_components/bootstrap/js/bootstrap.min.js"></script>

<!-- notification js -->
<script type="text/javascript" src="/vendor/adminty/assets/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="/vendor/adminty/assets/pages/notification/notification.js"></script>

@if (\Request::is('antrian-makan'))  	
	<!-- jquery slimscroll js -->
    <script type="text/javascript" src="/vendor/adminty/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="/vendor/adminty/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="/vendor/adminty/bower_components/modernizr/js/css-scrollbars.js"></script>
@endif


<!-- PLUGIN ASSETS -->
@yield('plugin-scripts')
<!-- END PLUGIN ASSETS -->

<!-- custom js -->
@if (!Request::is('antrian-makan'))  	
	<script type="text/javascript" src="/vendor/adminty/assets/js/SmoothScroll.js"></script>
	<script src="/vendor/adminty/assets/js/pcoded.min.js"></script>
	<script src="/vendor/adminty/assets/js/menu/menu-header-fixed.js"></script>
@endif

@if (\Request::is('antrian-makan'))  	
	<script src="/vendor/adminty/assets/js/pcoded.min.js"></script>
	<script src="/vendor/adminty/assets/js/menu/menu-hori-fixed.js"></script>
	<script src="/vendor/adminty/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
@endif


<script type="text/javascript" src="/vendor/adminty/assets/js/script.js"></script>


