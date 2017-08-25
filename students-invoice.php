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
            <h2>Student Recipes</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Invoices Detail</h2>
                        <ul class="header-dropdown m-r--5">                            
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Print Invoices</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="javascript:void(0);">Export to XLS</a></li>
                                    <li><a href="javascript:void(0);">Export to CSV</a></li>
                                    <li><a href="javascript:void(0);">Export to XML</a></li>                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-right"><img src="assets/images/logo-placeholder.jpg" width="70" alt="velonic"></h4>                                                
                            </div>
                            <div class="pull-right">
                                <h4>Invoice # <br>
                                    <strong>2015-04-5654667546</strong>
                                </h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">                                                
                                <div class="pull-left mt-20">
                                    <address>
                                      <strong>Twitter, Inc.</strong><br>
                                      795 Folsom Ave, Suite 546<br>
                                      San Francisco, CA 54656<br>
                                      <abbr title="Phone">P:</abbr> (123) 456-34636
                                      </address>
                                </div>
                                <div class="pull-right mt-20">
                                    <p><strong>Order Date: </strong> Feb 15, 2017</p>
                                    <p class="m-t-10"><strong>Order Status: </strong> <span class="badge bg-orange">Pending</span></p>
                                    <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-40"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                        <thead>
                                            <tr><th>#</th>
                                            <th>Name</th>
                                            <th>Batch</th>
                                            <th>Exp.</th>
                                            <th>Description</th>
                                            <th>Cost</th>
                                            <th>Total</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Semester Fees</td>
                                                <td>98523</td>
                                                <td>02-2018</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td>$380</td>
                                                <td>$380</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>library</td>
                                                <td>35820</td>
                                                <td>02-2018</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td>$50</td>
                                                <td>$50</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>sports activity</td>
                                                <td>25846</td>
                                                <td>02-2018</td>
                                                <td>Lorem ipsum dolor sit amet.</td>
                                                <td>$80</td>
                                                <td>$80</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="border-radius: 0px;">
                            <div class="col-md-3 col-md-offset-9">
                                <p class="text-right"><b>Sub-total:</b> 510.00</p>
                                <p class="text-right">Discout: 12%</p>
                                <p class="text-right">VAT: 12%</p>
                                <hr>
                                <h3 class="text-right">USD 449.00</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="hidden-print">
                            <div class="pull-right">
                                <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                                <a href="#" class="btn btn-raised btn-default">Submit</a>
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

<!-- Mirrored from thememakker.com/swift/university/students-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:28:11 GMT -->
</html>