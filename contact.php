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
<section class="content contact">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Get in Touch</h2>
            <small class="text-muted">Welcome to Swift application</small> </div>
        <div class="row clearfix">
            <div class="col-xs-12 ">
                <div class="card">
                    <div id="gmap_basic_example" class="gmap"></div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <p>If you need help before, during or after your purchase, this is the place to be. Please use below contact details for all your pre-sale questions, contact questions.</p>
                        <hr>
                        <ul class="contact-details">
                            <li><i class="zmdi zmdi-link"></i><a href="#">www.yoursite.com</a></li>
                            <li><i class="zmdi zmdi-email"></i><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li><i class="zmdi zmdi-whatsapp"></i> +90 123 45 67</li>
                            <li><i class="zmdi zmdi-phone"></i> +90 123 45 68</li>
                            <li><i class="zmdi zmdi-pin"></i> Envato INC 22 Elizabeth St.</li>
                        </ul>
                        <hr>
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li class="facebook"><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>
                                <li class="facebook"><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li class="facebook"><a href="#"><i class="zmdi zmdi-google-plus"></i></a></li>
                                <li class="facebook"><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                                <li class="facebook"><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li class="facebook"><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>CONTACT DETAILS</h2>
                        <small>For your pre-sale questions, please use form below</small>
                    </div>
                    <div class="body">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Name *">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="eMail *">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Phone *">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="https://maps.google.com/maps/api/js?v=3&amp;sensor=false"></script> <!-- Google Maps API Js --> 
<script src="assets/plugins/gmaps/gmaps.js"></script> <!-- GMaps PLugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/maps/google.js"></script> 
<script src="assets/js/pages/index.js"></script>
</body>

<!-- Mirrored from thememakker.com/swift/university/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:29:27 GMT -->
</html>