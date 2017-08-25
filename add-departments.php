<?php 


include("common/header.php");
include("common/page-restriction.php");
include("common/database.php");
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
<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Department</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Department Basic Info <small>Description text here...</small> </h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Department Name ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Head of Department">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" placeholder="No. of Students ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Brief"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                                <button type="submit" class="btn btn-raised">Cancel</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <div class="row clearfix">
			<div class="col-md-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Staff Member Account Info <small>Description text here...</small> </h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-raised">Submit</button>
                                <button type="submit" class="btn btn-raised">Cancel</button>
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

<!-- Mirrored from thememakker.com/swift/university/add-departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:28:42 GMT -->
</html>