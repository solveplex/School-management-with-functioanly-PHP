<?php 
include("common/header.php");
include("common/page-restriction.php");
 ?>

<body class="theme-blush">
<?php include("common/header-nav.php"); ?>
<!--Side menu and right menu -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <?php include('common/admin-left-menu.php'); ?>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar --> 
    <!-- Right Sidebar  এখান থেকে শুরু -->
    




    <!-- #END# Right Sidebar --> 
</section>
<!--Side menu and right menu -->

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>RANGE SLIDERS</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> EXAMPLES <small>Taken by Ion Range Slider which link is <a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html" target="_blank">ionden.com/a/plugins/ion.rangeSlider/en.html</a></small> </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="irs-demo"> <b>Start without params</b>
                            <input type="text" id="range_01" value="" />
                        </div>
                        <div class="irs-demo"> <b>Set min value, max value and start point</b>
                            <input type="text" id="range_02" value="" />
                        </div>
                        <div class="irs-demo"> <b>Set type to double and specify range, also showing grid and adding prefix "$"</b>
                            <input type="text" id="range_03" value="" />
                        </div>
                        <div class="irs-demo"> <b>Set up range with negative values</b>
                            <input type="text" id="range_04" value="" />
                        </div>
                        <div class="irs-demo"> <b>Using step 250</b>
                            <input type="text" id="range_05" value="" />
                        </div>
                        <div class="irs-demo"> <b>Set up range with fractional values, using fractional step</b>
                            <input type="text" id="range_06" value="" />
                        </div>
                        <div class="irs-demo"> <b>Set up you own numbers</b>
                            <input type="text" id="range_07" value="" />
                        </div>
                        <div class="irs-demo"> <b>Using any strings as your values</b>
                            <input type="text" id="range_08" value="" />
                        </div>
                        <div class="irs-demo"> <b>One more example with strings</b>
                            <input type="text" id="range_09" value="" />
                        </div>
                        <div class="irs-demo"> <b>No prettify. Big numbers are ugly and unreadable</b>
                            <input type="text" id="range_10" value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js -->
<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script> <!-- RangeSlider Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/ui/range-sliders.js"></script> <!-- Custom Js --> 

<script src="assets/js/pages/index.js"></script>
</body>

<!-- Mirrored from thememakker.com/swift/university/range-sliders.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:30:27 GMT -->
</html>