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
</section>
<!--Side menu and right menu -->

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Library Assets</h2>
            <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Assets Details</h2>
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
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Subject</th>
                                    <th>Department</th>
                                    <th>Type</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Electronics</td>
                                    <td>Management</td>
                                    <td>Automobile Engg.</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Electronics</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Electronics</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Electronics</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Computer Networking</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Graphics</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Electronics</td>
                                    <td>Management</td>
                                    <td>Computer</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Animation</td>
                                    <td>Management</td>
                                    <td>Computer</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Electronics</td>
                                    <td>Management</td>
                                    <td>Computer</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Integrated Circuits</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Electronics</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Animation Graphic Fundamentals	</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Electronics</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Graphic Designing</td>
                                    <td>Management</td>
                                    <td>Architecture</td>
                                    <td>Book</td>
                                    <td>First Year</td>
                                    <td>In Stock</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>

<<?php
include("common/fotter.php");
?>