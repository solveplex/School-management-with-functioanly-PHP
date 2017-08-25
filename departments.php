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
            <h2>ALL DEPARTMENTS</h2>
            <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>All Departments</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Dept. Name</th>
                                    <th>Brief</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>No. of Students</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>M.COM</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>B.COM</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>BBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>MCA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples --> 
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>All Departments </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>Dept. Name</th>
                                    <th>Brief</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>No. of Students</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>M.COM</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>B.COM</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>BBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>MBA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>MCA</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>info@gamil.com</td>
                                    <td>+123 456 7890</td>
                                    <td>Airi Satou</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table --> 
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="assets/plugins/jquery-datatable/jquery.dataTables.js"></script> 
<script src="assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script> 
<script src="assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script> 
<script src="assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script> 
<script src="assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script> 
<script src="assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script> 
<script src="assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script> 
<script src="assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script> 
<script src="assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/tables/jquery-datatable.js"></script> 

<script src="assets/js/pages/index.js"></script>
</body>

<!-- Mirrored from thememakker.com/swift/university/departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:28:42 GMT -->
</html>