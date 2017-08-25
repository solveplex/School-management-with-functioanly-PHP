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
            <h2>Blog Page</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <section class="section blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="left-box">
                            <div class="single-blog-post">
                                <div class="img-holder">
                                    <div class="img-post"><img src="assets/images/puppy-1.jpg" alt="Awesome Image"></div>
                                    <div class="date-box"><span>25</span><br>
                                        June</div>
                                </div>
                                <ul class="meta list-inline">
                                    <li><a href="#"><i class="zmdi zmdi-account"></i> Posted By: John Smith</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-label"></i> investiment, taxes</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-comment-text"></i> Comments: 5</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Lorem Ipsum is simply dummy text of the printing</a></h3>
                                <p>Lorem Ipsum is sim Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <a href="blog-details.html" class="btn btn-raised btn-default">Read More</a> </div>
                            <div class="single-blog-post">
                                <div class="img-holder">
                                    <div class="img-post"><img src="assets/images/puppy-3.jpg" alt="Awesome Image"></div>
                                    <div class="date-box"><span>25</span><br>
                                        June</div>
                                </div>
                                <ul class="meta list-inline">
                                    <li><a href="#"><i class="zmdi zmdi-account"></i> Posted By: John Smith</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-label"></i> investiment, taxes</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-comment-text"></i> Comments: 5</a></li>
                                </ul>
                                <h3><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="btn btn-raised btn-default">Read More</a> </div>
                            <div class="single-blog-post">
                                <div class="img-holder">
                                    <div class="img-post"><img src="assets/images/puppy-2.jpg" alt="Awesome Image"></div>
                                    <div class="date-box"><span>25</span><br>
                                        June</div>
                                </div>
                                <ul class="meta list-inline">
                                    <li><a href="#"><i class="zmdi zmdi-account"></i> Posted By: John Smith</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-label"></i> investiment, taxes</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-comment-text"></i> Comments: 5</a></li>
                                </ul>
                                <h3><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <a href="#" class="btn btn-raised btn-default">Read More</a> </div>
                            <div class="single-blog-post">
                                <div class="img-holder">
                                    <div class="img-post"><img src="assets/images/puppy-1.jpg" alt="Awesome Image"></div>
                                    <div class="date-box"><span>25</span><br>
                                        June</div>
                                </div>
                                <ul class="meta list-inline">
                                    <li><a href="#"><i class="zmdi zmdi-account"></i> Posted By: John Smith</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-label"></i> investiment, taxes</a></li>
                                    <li><a href="#"><i class="zmdi zmdi-comment-text"></i> Comments: 5</a></li>
                                </ul>
                                <h3><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="#" class="btn btn-raised btn-default">Read More</a> </div>
                            <ul class="pagination pagination-primary">
                                <li><a href="#"><</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="right-box">
                            <div class="single-sidebar-widget search">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Enter text here">
                                    </div>
                                    <button class="btn btn-raised btn-primary btn-sm" type="submit">Search</button>
                                </div>
                            </div>
                            <div class="single-sidebar-widget categories">
                                <div class="category-widget">
                                    <div class="title">
                                        <h2>CATEGORIES</h2>
                                        <div class="decor-line"></div>
                                    </div>
                                    <ul>
                                        <li> <a href="#">Web Design <span class="count">(2)</span></a> </li>
                                        <li> <a href="#">People</a> </li>
                                        <li> <a href="#">Photography <span class="count">(4)</span></a> </li>
                                        <li> <a href="#">Videos <span class="count">(3)</span></a> </li>
                                        <li> <a href="#">Animals</a> </li>
                                        <li> <a href="#">Lifestyle <span class="count">(2)</span></a> </li>
                                        <li> <a href="#">Business</a> </li>
                                        <li> <a href="#">Technology <span class="count">(1)</span></a> </li>
                                        <li> <a href="#">Sports</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget popular">
                                <div class="post-widget">
                                    <div class="title">
                                        <h2>Popular Posts</h2>
                                        <div class="decor-line"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="icon-box"><img src="assets/images/puppy-1.jpg" alt="Awesome Image"></div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                                                <span>02 Dec.</span> </div>
                                        </li>
                                        <li>
                                            <div class="icon-box"><img src="assets/images/puppy-2.jpg" alt="Awesome Image"></div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                                                <span>02 Dec.</span> </div>
                                        </li>
                                        <li>
                                            <div class="icon-box"><img src="assets/images/puppy-3.jpg" alt="Awesome Image"></div>
                                            <div class="text-box">
                                                <h3><a href="#">Lorem Ipsum is simply dummy text</a></h3>
                                                <span>02 Dec.</span> </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="text-widget">
                                    <div class="title">
                                        <h2>Text widget</h2>
                                        <div class="decor-line"></div>
                                    </div>
                                    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</h5>
                                </div>
                            </div>
                            <div class="single-sidebar-widget tag-clouds">
                                <div class="tags-widget">
                                    <div class="title">
                                        <h2>Tag Clouds</h2>
                                        <div class="decor-line"></div>
                                    </div>
                                    <ul class="">
                                        <li><a href="#" class="tag label label-default">Design</a></li>
                                        <li><a href="#" class="tag label label-success">Project</a></li>
                                        <li><a href="#" class="tag label label-info">Creative UX</a></li>
                                        <li><a href="#" class="tag label label-success">Wordpress</a></li>
                                        <li><a href="#" class="tag label label-warning">HTML5</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget newsletter">
                                <div class="text-widget">
                                    <div class="title">
                                        <h2>Email Newsletter</h2>
                                        <div class="decor-line"></div>
                                    </div>
                                    <h5>Get our products/news earlier than others, let’s get in touch.</h5>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Enter Your Email Address">
                                        </div>
                                        <button class="btn btn-raised btn-primary" type="submit">SUBSCRIBE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

<!-- Mirrored from thememakker.com/swift/university/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 19:29:28 GMT -->
</html>