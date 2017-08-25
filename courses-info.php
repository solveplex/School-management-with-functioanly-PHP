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
<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Course Information</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class=" card">
                    <div class="course-profile">
                        <img src="assets/images/course-img.jpg" class="img-responsive" alt="">
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>About Patient</h2>
                    </div>
                    <div class="body">
                        <p>Course Name</p>
                        <h4 class="col-blush">Web Design</h4>
                        <p>Course Duration</p>
                        <h4>1 Year</h4>
                        <p>Course Price</p>
                        <h4 class="col-green">$125.00</h4>
                        <p>Professor Name</p>
                        <h4>will smith</h4>
                        <p>Difficulty</p>
                        <h4>Advanced</h4>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active"><a href="#report" data-toggle="tab" aria-expanded="false">Biography</a></li>
                            <li role="presentation" class=""><a href="#timeline" data-toggle="tab" aria-expanded="true">Activities</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="report">
                                <div class="wrap-reset">                                    
                                    <div class="mypost-list">
                                        <div class="post-box">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                        </div>
                                        <hr>
                                        <h4>Certification</h4>
                                        <ul class="dis">
                                            <li>Integer aesent vest .</li>
                                            <li>Praesent vestibulum dapibus nibh.</li>
                                            <li>Integer tinciaesent vest dunt.</li>
                                            <li>Praesent vestibulum dapibus nibh.</li>
                                            <li>Integer tincidunt.</li>
                                            <li>Praesent vestibulum dapibus nibh.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="timeline">
                                <div class="timeline-body">
                                    <div class="timeline m-border">
                                        <div class="timeline-item">
                                            <div class="item-content">
                                                <div class="text-small">1 Sept 2017</div>
                                                <p>Start Second Semester.</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-info">
                                            <div class="item-content">
                                                <div class="text-small">1 Aug to 31 Aug 2017</div>
                                                <p>vacation</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-warning border-l">
                                            <div class="item-content">
                                                <div class="text-small">25 July 2017</div>
                                                <p>Exam</p>
                                            </div>
                                        </div>
                                        <div class="timeline-item border-warning">
                                            <div class="item-content">
                                                <div class="text-small">31 march 2017</div>
                                                <p>Admission</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row clearfix">
            <div class="col-md-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="plans row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <ul class="planContainer">
                                    <li class="title"><h2>Plan 1</h2></li>
                                    <li class="price"><p>$10/<span>month</span></p></li>
                                    <li>
                                        <ul class="options">
                                            <li>2x <span>option 1</span></li>
                                            <li>Free <span>option 2</span></li>
                                            <li>Unlimited <span>option 3</span></li>
                                            <li>Unlimited <span>option 4</span></li>
                                            <li>1x <span>option 5</span></li>
                                        </ul>
                                    </li>
                                    <li><a  class="btn btn-raised btn-sm btn-success" href="#">Purchase</a></li>
                                </ul>
                            </div>        
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <ul class="planContainer">
                                    <li class="title"><h2 class="bestPlanTitle">Plan 2</h2></li>
                                    <li class="price"><p class="bestPlanPrice">$20/month</p></li>
                                    <li>
                                        <ul class="options">
                                            <li>2x <span>option 1</span></li>
                                            <li>Free <span>option 2</span></li>
                                            <li>Unlimited <span>option 3</span></li>
                                            <li>Unlimited <span>option 4</span></li>
                                            <li>1x <span>option 5</span></li>
                                        </ul>
                                    </li>
                                    <li><a class="btn btn-raised btn-sm btn-success" href="#">Purchase</a></li>
                                </ul>
                            </div>        
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <ul class="planContainer">
                                    <li class="title"><h2>Plan 3</h2></li>
                                    <li class="price"><p>$30/<span>month</span></p></li>
                                    <li>
                                        <ul class="options">
                                            <li>2x <span>option 1</span></li>
                                            <li>Free <span>option 2</span></li>
                                            <li>Unlimited <span>option 3</span></li>
                                            <li>Unlimited <span>option 4</span></li>
                                            <li>1x <span>option 5</span></li>
                                        </ul>
                                    </li>
                                    <li><a class="btn btn-raised btn-sm g-bg-blush2" href="#">Purchase</a></li>
                                </ul>
                            </div>        
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <ul class="planContainer">
                                    <li class="title"><h2>Plan 4</h2></li>
                                    <li class="price"><p>$40/<span>month</span></p></li>
                                    <li>
                                        <ul class="options">
                                            <li>2x <span>option 1</span></li>
                                            <li>Free <span>option 2</span></li>
                                            <li>Unlimited <span>option 3</span></li>
                                            <li>Unlimited <span>option 4</span></li>
                                            <li>1x <span>option 5</span></li>
                                        </ul>
                                    </li>
                                    <li><a  class="btn btn-raised btn-sm btn-primary" href="#">Purchase</a></li>
                                </ul>
                            </div>
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

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 

<script src="assets/js/pages/index.js"></script>
</body>

<!-- Mirrored from thememakker.com/swift/university/courses-info.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:28:17 GMT -->
</html>