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
            <h2>COLLAPSE</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <!-- Example -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> EXAMPLE <small>Click the buttons below to show and hide another element via class changes. You can use a link with the <code>href</code> attribute, or a button with the <code>data-target</code> attribute. In both cases, the <code>data-toggle="collapse"</code> is required.</small> </h2>
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
                    <div class="body"> <a class="btn bg-pink waves-effect m-b-15" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                               aria-controls="collapseExample"> LINK WITH HREF </a>
                        <button class="btn btn-raised bg-cyan waves-effect m-b-15" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample"> BUTTON WITH data-target </button>
                        <div class="collapse" id="collapseExample">
                            <div class="well"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Example -->
        <div class="block-header">
            <h2>ACCORDION</h2>
        </div>
        <div class="row clearfix"> 
            <!-- Basic Examples -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> BASIC EXAMPLES <small>Extend the default collapse behavior to create an accordion with the panel component.</small> </h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12"> <b>Panel Primary</b>
                                <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingOne_1">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1"> Collapsible Group Item #1 </a> </h4>
                                        </div>
                                        <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingTwo_1">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                                       aria-controls="collapseTwo_1"> Collapsible Group Item #2 </a> </h4>
                                        </div>
                                        <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingThree_1">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                                       aria-controls="collapseThree_1"> Collapsible Group Item #3 </a> </h4>
                                        </div>
                                        <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples --> 
            <!-- Full Body Examples -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> FULL BODY EXAMPLES <small>If you want to also colorful body, you need to add <code>.full-body</code> class to <code>.panel-group</code></small> </h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12"> <b>Panel Primary</b>
                                <div class="panel-group full-body" id="accordion_5" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingOne_5">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseOne_5" aria-expanded="true" aria-controls="collapseOne_5"> Collapsible Group Item #1 </a> </h4>
                                        </div>
                                        <div id="collapseOne_5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_5">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingTwo_5">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseTwo_5" aria-expanded="false"
                                                       aria-controls="collapseTwo_5"> Collapsible Group Item #2 </a> </h4>
                                        </div>
                                        <div id="collapseTwo_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_5">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading" role="tab" id="headingThree_5">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_5" href="#collapseThree_5" aria-expanded="false"
                                                       aria-controls="collapseThree_5"> Collapsible Group Item #3 </a> </h4>
                                        </div>
                                        <div id="collapseThree_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_5">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Full Body Examples --> 
        </div>
        <div class="row clearfix"> 
            <!-- Examples With Material Design Colors -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> EXAMPLES WITH MATERIAL DESIGN COLORS <small>You can use material design colors which examples are <code>.panel-col-pink, .panel-col-cyan</code> class</small> </h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <div class="panel-group" id="accordion_10" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-col-blue-grey">
                                        <div class="panel-heading" role="tab" id="headingOne_10">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_10" href="#collapseOne_10" aria-expanded="true" aria-controls="collapseOne_10"> Collapsible Group Item #1 </a> </h4>
                                        </div>
                                        <div id="collapseOne_10" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_10">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-blue-grey">
                                        <div class="panel-heading" role="tab" id="headingTwo_10">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_10" href="#collapseTwo_10" aria-expanded="false"
                                                       aria-controls="collapseTwo_10"> Collapsible Group Item #2 </a> </h4>
                                        </div>
                                        <div id="collapseTwo_10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_10">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-blue-grey">
                                        <div class="panel-heading" role="tab" id="headingThree_10">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_10" href="#collapseThree_10" aria-expanded="false"
                                                       aria-controls="collapseThree_10"> Collapsible Group Item #3 </a> </h4>
                                        </div>
                                        <div id="collapseThree_10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_10">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Examples With Material Design Colors --> 
            <!-- Full Body Examples With Material Design Colors -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> FULL BODY EXAMPLES WITH MATERIAL DESIGN COLORS <small>If you want to also colorful body, you need to add <code>.full-body</code> class to <code>.panel-group</code></small> </h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <div class="panel-group full-body" id="accordion_13" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-col-green">
                                        <div class="panel-heading" role="tab" id="headingOne_13">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_13" href="#collapseOne_13" aria-expanded="true" aria-controls="collapseOne_13"> Collapsible Group Item #1 </a> </h4>
                                        </div>
                                        <div id="collapseOne_13" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_13">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-green">
                                        <div class="panel-heading" role="tab" id="headingTwo_13">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_13" href="#collapseTwo_13" aria-expanded="false"
                                                       aria-controls="collapseTwo_13"> Collapsible Group Item #2 </a> </h4>
                                        </div>
                                        <div id="collapseTwo_13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_13">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-green">
                                        <div class="panel-heading" role="tab" id="headingThree_13">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_13" href="#collapseThree_13" aria-expanded="false"
                                                       aria-controls="collapseThree_13"> Collapsible Group Item #3 </a> </h4>
                                        </div>
                                        <div id="collapseThree_13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_13">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Full Body Examples With Material Design Colors --> 
        </div>
        <div class="row clearfix"> 
            <!-- Colorful Panel Items With Icon -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> COLORFUL PANEL ITEMS WITH ICON </h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-col-grey">
                                        <div class="panel-heading" role="tab" id="headingOne_17">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17"> <i class="material-icons">perm_contact_calendar</i> Collapsible Group
                                                Item #1 </a> </h4>
                                        </div>
                                        <div id="collapseOne_17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-blue-grey">
                                        <div class="panel-heading" role="tab" id="headingTwo_17">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseTwo_17" aria-expanded="false"
                                                       aria-controls="collapseTwo_17"> <i class="material-icons">cloud_download</i> Collapsible Group Item
                                                #2 </a> </h4>
                                        </div>
                                        <div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-orange">
                                        <div class="panel-heading" role="tab" id="headingThree_17">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseThree_17" aria-expanded="false"
                                                       aria-controls="collapseThree_17"> <i class="material-icons">contact_phone</i> Collapsible Group Item
                                                #3 </a> </h4>
                                        </div>
                                        <div id="collapseThree_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_17">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-deep-orange">
                                        <div class="panel-heading" role="tab" id="headingFour_17">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseFour_17" aria-expanded="false"
                                                       aria-controls="collapseFour_17"> <i class="material-icons">folder_shared</i> Collapsible Group Item
                                                #4 </a> </h4>
                                        </div>
                                        <div id="collapseFour_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_17">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Colorful Panel Items With Icon --> 
            <!-- Full Body Colorful Panel Items With Icon -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> FULL BODY COLORFUL PANEL ITEMS WITH ICON </h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <div class="panel-group full-body" id="accordion_18" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-col-blush">
                                        <div class="panel-heading" role="tab" id="headingOne_18">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseOne_18" aria-expanded="true" aria-controls="collapseOne_18"> <i class="material-icons">perm_contact_calendar</i> Collapsible Group
                                                Item #1 </a> </h4>
                                        </div>
                                        <div id="collapseOne_18" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_18">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-green">
                                        <div class="panel-heading" role="tab" id="headingTwo_18">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseTwo_18" aria-expanded="false"
                                                       aria-controls="collapseTwo_18"> <i class="material-icons">cloud_download</i> Collapsible Group Item
                                                #2 </a> </h4>
                                        </div>
                                        <div id="collapseTwo_18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_18">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-light-blue">
                                        <div class="panel-heading" role="tab" id="headingThree_18">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseThree_18" aria-expanded="false"
                                                       aria-controls="collapseThree_18"> <i class="material-icons">contact_phone</i> Collapsible Group Item
                                                #3 </a> </h4>
                                        </div>
                                        <div id="collapseThree_18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_18">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-lime">
                                        <div class="panel-heading" role="tab" id="headingFour_18">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_18" href="#collapseFour_18" aria-expanded="false"
                                                       aria-controls="collapseFour_18"> <i class="material-icons">folder_shared</i> Collapsible Group Item
                                                #4 </a> </h4>
                                        </div>
                                        <div id="collapseFour_18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_18">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Full Body Colorful Panel Items With Icon --> 
        </div>
        
        <!-- Multiple Items To Be Open -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> MULTIPLE ITEMS TO BE OPEN <small>Don't use <code>data-parent</code> attributes</small> </h2>
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
                        <div class="row clearfix">
                            <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-col-light-green">
                                        <div class="panel-heading" role="tab" id="headingOne_19">
                                            <h4 class="panel-title"> <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19"> <i class="material-icons">perm_contact_calendar</i> Collapsible Group
                                                Item #1 </a> </h4>
                                        </div>
                                        <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-black">
                                        <div class="panel-heading" role="tab" id="headingTwo_19">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo_19" aria-expanded="false" aria-controls="collapseTwo_19"> <i class="material-icons">cloud_download</i> Collapsible Group Item
                                                #2 </a> </h4>
                                        </div>
                                        <div id="collapseTwo_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_19">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-purple">
                                        <div class="panel-heading" role="tab" id="headingThree_19">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree_19" aria-expanded="false" aria-controls="collapseThree_19"> <i class="material-icons">contact_phone</i> Collapsible Group Item
                                                #3 </a> </h4>
                                        </div>
                                        <div id="collapseThree_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_19">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-col-orange">
                                        <div class="panel-heading" role="tab" id="headingFour_19">
                                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour_19" aria-expanded="false" aria-controls="collapseFour_19"> <i class="material-icons">folder_shared</i> Collapsible Group Item
                                                #4 </a> </h4>
                                        </div>
                                        <div id="collapseFour_19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_19">
                                            <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                                                raw denim aesthetic synth nesciunt you probably haven't heard of them
                                                accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Multiple Items To Be Open --> 
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/bootstrap-notify/bootstrap-notify.js"></script> <!-- Bootstrap Notify Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 

<script src="assets/js/pages/index.js"></script>

</body>

<!-- Mirrored from thememakker.com/swift/university/collapse.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:30:03 GMT -->
</html>