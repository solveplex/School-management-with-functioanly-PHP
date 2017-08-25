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
            <h2>Widgets</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>        
        <div class="row clearfix">
            <div class="col-md-6 col-xs-12">
                <div class="row clearfix">            
                    <div class="col-md-6 col-xs-12">
                        <div class="card">
                            <div class="panel-body">
                                <h3>50.5 Gb</h3>
                                <p class="text-muted">Traffic this month</p>
                                <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="success">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <span class="text-small">4% higher than last month</span> </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="card">
                            <div class="panel-body">
                                <h3>26.8%</h3>
                                <p class="text-muted">Server Load</p>
                                <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="danger">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <span class="text-small">4% higher than last month</span> </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="card">
                            <div class="panel-body">
                                <h3>$ 14,500</h3>
                                <p class="text-muted">Total Sale</p>
                                <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="warning">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <span class="text-small">15% higher than last month</span> </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="card">
                            <div class="panel-body">
                                <h3>1,600</h3>
                                <p class="text-muted">Total Feedbacks</p>
                                <div class="progressbar-xs progress-rounded progress-striped progress ng-isolate-scope" value="68" type="info">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                </div>
                                <span class="text-small">10% higher than last month</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="row clearfix top-report">
                    <div class="col-xs-12">
                        <div class="card">                    
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active"> <img src="assets/images/puppy-1.jpg" alt=""/> </div>
                                <div class="item"> <img src="assets/images/puppy-2.jpg" alt="" /> </div>
                                <div class="item"> <img src="assets/images/puppy-3.jpg" alt="" /> </div>
                            </div>
                            
                            <!-- Controls --> 
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                    <div class="content">
                        <div class="text">New Student</div>
                        <div class="number">27</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                    <div class="content">
                        <div class="text">New MCA Student</div>
                        <div class="number">12</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                    <div class="content">
                        <div class="text">Today's Joining</div>
                        <div class="number">05</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                    <div class="content">
                        <div class="text">University Earning</div>
                        <div class="number">$3,540</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-green">
                    <div class="icon">
                        <div class="chart chart-bar">6,8,6,8,10,2,11,4</div>
                    </div>
                    <div class="content">
                        <div class="text">Total Income</div>
                        <div class="number">$127 526</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-blush">
                    <div class="icon">
                        <div class="chart chart-bar">6,7,3,8,10,5,3,4</div>
                    </div>
                    <div class="content">
                        <div class="text">Unique Student</div>
                        <div class="number">457</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-blue">
                    <div class="icon"> <span class="chart chart-line">9,4,6,5,6,4,7,3</span> </div>
                    <div class="content">
                        <div class="text">Monthly Income</div>
                        <div class="number">$125</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-3 bg-blue-grey">
                    <div class="icon">
                        <div class="chart chart-bar">4,6,-3,-1,2,-2,4,6</div>
                    </div>
                    <div class="content">
                        <div class="text">Net Profit</div>
                        <div class="number">$1 063</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>University Budget</h2>
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
                        <canvas id="line_chart" height="70"></canvas>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail"> <img src="assets/images/puppy-1.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s </p>
                        <p> <a href="javascript:void(0);" class="btn btn-raised g-bg-cyan waves-effect waves-effect btn-sm" role="button">BUTTON</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail"> <img src="assets/images/puppy-2.jpg" alt=" /">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s </p>
                        <p> <a href="javascript:void(0);" class="btn btn-raised g-bg-cyan btn-primary waves-effect btn-sm" role="button">BUTTON</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail"> <img src="assets/images/puppy-3.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s </p>
                        <p> <a href="javascript:void(0);" class="btn btn-raised g-bg-cyan btn-primary waves-effect btn-sm" role="button">BUTTON</a> </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail"> <img src="assets/images/puppy-1.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s </p>
                        <p> <a href="javascript:void(0);" class="btn btn-raised g-bg-cyan btn-primary waves-effect btn-sm" role="button">BUTTON</a> </p>
                    </div>
                </div>
            </div>
        </div>        
        
        <div class="row clearfix">                    
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis <small >18% High then last month</small></h2>
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
                        <div class="stats-report">
                          <div class="stat-item">
                            <h5>Overall</h5>
                            <b class="col-indigo">70.40%</b></div>
                          <div class="stat-item">
                            <h5>Montly</h5>
                            <b class="col-indigo">25.80%</b></div>
                          <div class="stat-item">
                            <h5>Day</h5>
                            <b class="col-indigo">12.50%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                                 data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                                 data-offset="90" data-width="100%" data-height="150px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                                 data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis <small>18% High then last month</small></h2>
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
                        <div class="stats-report">
                          <div class="stat-item">
                            <h5>Overall</h5>
                            <b class="col-blue-grey">80.40%</b></div>
                          <div class="stat-item">
                            <h5>Montly</h5>
                            <b class="col-blue-grey">13.00%</b></div>
                          <div class="stat-item">
                            <h5>Day</h5>
                            <b class="col-blue-grey">9.50%</b></div>
                        </div>
                        <div class="sparkline" data-type="bar" data-width="97%" data-height="150px" data-bar-Width="16" data-bar-Spacing="7" data-bar-Color="rgb(96, 125, 139)"> 6,7,8,9,10,5,13,18,21,7,9,11,12,5 </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Income Analysis <small>18% High then last month</small></h2>
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
                        <div class="stats-report">
                          <div class="stat-item">
                            <h5>Overall</h5>
                            <b class="col-black">84.60%</b></div>
                          <div class="stat-item">
                            <h5>Montly</h5>
                            <b class="col-black">15.40%</b></div>
                          <div class="stat-item">
                            <h5>Day</h5>
                            <b class="col-black">5.10%</b></div>
                        </div>
                        <div class="sparkline-pie text-center">6,4,8</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Exam Toppers</h2>
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
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Charts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dean Otto</td>
                                    <td>
                                        <span class="sparkbar">5,8,6,3,5,9,2</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>K. Thornton</td>
                                    <td>
                                       <span class="sparkbar">10,8,9,3,5,8,5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kane D.</td>
                                    <td>
                                        <span class="sparkbar">7,5,9,3,5,2,5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jack Bird</td>
                                    <td>
                                        <span class="sparkbar">10,8,1,3,3,8,7</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hughe L.</td>
                                    <td>
                                        <span class="sparkbar">2,8,9,8,5,1,5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jack Bird</td>
                                    <td>
                                        <span class="sparkbar">1,8,2,3,9,8,5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hughe L.</td>
                                    <td>
                                        <span class="sparkbar">10,8,1,3,2,8,5</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Acivites -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card activities">
                    <div class="header">
                        <h2>Activities</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="streamline b-l b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted-dk">Just now</div>
                                    <p>Finished task <a href="#" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted-dk">11:30</div>
                                    <p><a href="#">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted-dk">10:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted-dk">3 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted-dk">10:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted-dk">3 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Acivites -->            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Attendance</h2>
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
                        <ul class="basic-list">
                            <li>Mark Otto <span class="pull-right label-danger label">21%</span></li>
                            <li>Jacob Thornton <span class="pull-right label-purple label">50%</span></li>
                            <li>Jacob Thornton<span class="pull-right label-success label">90%</span></li>
                            <li>M. Arthur <span class="pull-right label-info label">75%</span></li>
                            <li>Jacob Thornton <span class="pull-right label-warning label">60%</span></li>
                            <li>M. Arthur <span class="pull-right label-success label">91%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix"> 
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>TASK INFOS</h2>
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
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task</th>
                                        <th>Status</th>
                                        <th>Professors</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Task A</td>
                                        <td><span class="label bg-green">Doing</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress m-b-0">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Task B</td>
                                        <td><span class="label bg-blue">To Do</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress m-b-0">
                                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Task C</td>
                                        <td><span class="label bg-light-blue">On Hold</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress m-b-0">
                                                <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Task D</td>
                                        <td><span class="label bg-orange">Wait Approvel</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress m-b-0">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Task E</td>
                                        <td><span class="label bg-red">Suspended</span></td>
                                        <td>John Doe</td>
                                        <td><div class="progress m-b-0">
                                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                            </div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info --> 
        </div>        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Recent sales</h2>
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
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>STATUS</th>
                                        <th>DATE</th>
                                        <th>PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="txt-oflo">Ipsum is simply</td>
                                        <td><span class="label label-success">DOING</span> </td>
                                        <td class="txt-oflo">Feb 11, 2017</td>
                                        <td><span class="text-success">$100</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="txt-oflo">Lorem Ipsum is</td>
                                        <td><span class="label label-info">TO DO</span></td>
                                        <td class="txt-oflo">March 29, 2017</td>
                                        <td><span class="text-info">$321</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="txt-oflo">Lorem Ipsum is simply</td>
                                        <td><span class="label label-danger">SUSPENDED</span></td>
                                        <td class="txt-oflo">April 21, 2017</td>
                                        <td><span class="text-danger">-$204</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="txt-oflo">Hosting press html</td>
                                        <td><span class="label label-warning">WAIT APPROVEL</span></td>
                                        <td class="txt-oflo">Jun 22, 2017</td>
                                        <td><span class="text-success">$11</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="txt-oflo">Lorem is simply</td>
                                        <td><span class="label label-success">DOING</span></td>
                                        <td class="txt-oflo">July 20, 2017</td>
                                        <td><span class="text-success">$11</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td class="txt-oflo">Lorem Ipsum simply</td>
                                        <td><span class="label label-success">DOING</span> </td>
                                        <td class="txt-oflo">July 21, 2017</td>
                                        <td><span class="text-danger">-$11</span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td class="txt-oflo">Lorem Ipsum is simply</td>
                                        <td><span class="label label-warning">WAIT APPROVEL</span></td>
                                        <td class="txt-oflo">July 21, 2017</td>
                                        <td><span class="text-success">$54</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <a href="#">Check all the sales</a>
                        </div>
                        <div class="row sales-report">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h2>Jan 2017</h2>
                                    <p>SALES REPORT</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                    <h1 class="text-right text-success m-t-20">$4,231</h1>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Our Location </h2>
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
                        <div id="world-map-markers" class="jvector-map"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Example -->
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 


<script src="https://maps.google.com/maps/api/js?v=3&amp;sensor=false"></script> <!-- Google Maps API Js --> 

<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> <!-- JVectorMap Plugin Js --> 
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> <!-- JVectorMap Plugin Js --> 

<script src="assets/plugins/waitme/waitMe.js"></script> <!-- Wait Me Plugin Js -->
<script src="assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js -->
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/js/pages/widgets/infobox/infobox-1.js"></script> 


<script src="assets/plugins/chartjs/Chart.bundle.min.js"></script> <!-- Chart Plugins Js --> 


<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/maps/jvectormap.js"></script>
<script src="assets/js/pages/cards/basic.js"></script> <!-- Custom Js -->

<script src="assets/js/pages/charts/sparkline.min.js"></script> 
<script src="assets/js/pages/charts/chartjs.min.js"></script>

<script src="assets/js/pages/index.js"></script>
</body>

<!-- Mirrored from thememakker.com/swift/university/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:29:24 GMT -->
</html>