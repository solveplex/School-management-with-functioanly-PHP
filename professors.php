﻿<?php 
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

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Professors</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">
                            <ul class="header-dropdown">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Block</a></li>
								</ul>
							</li>
						</ul>
                            <div class="thumb-xl member-thumb">
                                <img src="assets/images/random-avatar3.jpg" class="img-circle" alt="profile-image">
                                <i class="zmdi zmdi-info" title="Permanent"></i>
                            </div>

                            <div class="">
                                <h4 class="m-b-5">Dr. John</h4>
                                <p class="text-muted">Java<span> <a href="#" class="text-pink">websitename.com</a> </span></p>
                            </div>

                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                            <a href="profile.html"  class="btn btn-raised btn-sm">View Profile</a>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="3.html" ><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 text-center">
                <a href="#" class="btn btn-raised g-bg-cyan">Add Doctor</a>
            </div>
        </div>
    </div>
</section>
<!-- main content -->

<?php
 include("common/fotter.php");
?>