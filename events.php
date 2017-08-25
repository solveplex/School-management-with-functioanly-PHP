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
<section class="content page-calendar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card m-t-15">
                    <div class="body">
                        <div class="tcol"> 
                            <!-- left side header-->
                            <div class="bg-white">
                                <button type="button" class="btn btn-raised btn-primary btn-sm" data-toggle="modal" href="#cal-new-event"> <i class="zmdi zmdi-plus"></i> Events</button>
                            </div>
                            <!-- /left side header --> 
                            
                            <!-- left side body -->
                            <div id="external-events">
                                <div class="event-name b-greensea"> The Custom Event #1 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-lightred"> The Custom Event #2 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-amethyst"> The Custom Event #3 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-amethyst"> The Custom Event #4 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-success"> The Custom Event #5 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-lightred"> The Custom Event #6 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-greensea"> The Custom Event #7 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-success"> The Custom Event #8 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-success"> The Custom Event #9 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-primary"> The Custom Event #10 <a class="pull-right text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <p class="m-t--15">
                                    <input type="checkbox" id="basic_checkbox_3" checked="" disabled="">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card m-t-15">
                <div class="body">
                    <div class="row">
                        <div class="col-md-4 col-sm-3">
                            <h4 class="custom-font text-default m-0">Events Schedule</h4>
                        </div>
                        <div class="col-md-8 col-sm-9 text-right">
                            <div class="btn-group">
                                <button class="btn btn-raised btn-success btn-sm" id="change-view-today">today</button>
                                <button class="btn btn-raised btn-default btn-sm" id="change-view-day" >Day</button>
                                <button class="btn btn-raised btn-default btn-sm" id="change-view-week">Week</button>
                                <button class="btn btn-raised btn-default btn-sm" id="change-view-month">Month</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="body">
                    <div class="tcol">                       
                        <div id="calendar"></div>                       
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

<script src="assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 

<script src="assets/js/pages/index.js"></script> 
<script src="assets/js/pages/calendar/calendar.js"></script>
</body>

<!-- Mirrored from thememakker.com/swift/university/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:27:50 GMT -->
</html>