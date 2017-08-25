<div class="user-info">
            <div class="admin-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
            <div class="admin-action-info"> <span>Welcome</span>
                <h3>Prof. <?php echo $_SESSION['name']; ?></h3>
                <ul>
                    <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.php"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a data-placement="bottom" title="Go to Profile" href="profile.php"><i class="zmdi zmdi-account"></i></a></li>                    
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Full Screen" href="sign-in.php" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active open"><a href="dashboard.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-email"></i><span>Mail Box</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="mail-inbox.php">Inbox</a></li>
                        
                    </ul>
                </li>
                <li><a href="events.php"><i class="zmdi zmdi-calendar-check"></i><span>Event Management</span> </a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>Professors</span> </a>
                    <ul class="ml-menu">
                        <li><a href="professors.php">All Professors</a></li>
                        <li><a href="add-professors.php">Add professors</a></li>                       
                        <li><a href="profile.php">professors Profile</a></li></ul>                   
                </li>                
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Students</span> </a>
                    <ul class="ml-menu">
                        <li><a href="students.php">All Students</a></li>
                        <li><a href="add-students.php">Add Students</a></li>                       
                        <li><a href="students-profile.php">Students Profile</a></li>
                        <li><a href="students-invoice.php">Students Invoice</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Courses</span> </a>
                    <ul class="ml-menu">
                        <li><a href="courses.php">All Courses</a></li>
                        <li><a href="add-courses.php">Add Courses</a></li>                       
                        <li><a href="courses-info.php">Courses Info</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-book"></i><span>Library</span> </a>
                    <ul class="ml-menu">
                        <li><a href="library.php">All Library</a></li>
                        <li><a href="add-library.php">Add Library</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Departments</span> </a>
                    <ul class="ml-menu">
                        <li><a href="departments.php">All Departments</a></li>
                        <li><a href="add-departments.php">Add Departments</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-mood"></i><span>Staffs</span> </a>
                    <ul class="ml-menu">
                        <li><a href="staffs.php">All Staffs</a></li>
                        <li><a href="add-staffs.php">Add Staffs</a></li>                       
                        <li><a href="staffs-info.php">Staffs Profile</a></li>
                    </ul>
                </li>
                <li><a href="centres.php"><i class="zmdi zmdi-pin"></i><span>University Centres</span></a></li>
                <li><a href="reports.php"><i class="zmdi zmdi-file-text"></i><span>Reports</span></a></li>
                <li><a href="widgets.php"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                    <ul class="ml-menu">
                        <li><a href="sign-in.php">Sign In</a> </li>
                        <li><a href="sign-up.php">Sign Up</a> </li>
                        <li><a href="forgot-password.php">Forgot Password</a> </li>
                        <li><a href="404.php">Page 404</a> </li>
                        <li><a href="500.php">Page 500</a> </li>
                        <li><a href="page-offline.php">Page Offline</a> </li>
                        <li><a href="locked.php">Locked Screen</a> </li>
                        <li><a href="blank.php">Blank Page</a> </li>
                        <li><a href="contact.php">Contact Us</a> </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blogger</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="blog.php">Blog List</a></li>
                        <li> <a href="blog-details.php">Blog Single</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> </a>
                    <ul class="ml-menu">
                        <li> <a href="basic-form-elements.php">Basic Form Elements</a> </li>
                        <li> <a href="advanced-form-elements.php">Advanced Form Elements</a> </li>
                        <li> <a href="form-examples.php">Form Examples</a> </li>
                        <li> <a href="form-validation.php">Form Validation</a> </li>
                        <li> <a href="form-wizard.php">Form Wizard</a> </li>
                        <li> <a href="editors.php">Editors</a> </li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                    <ul class="ml-menu">
                        <li><a href="typography.php">Typography</a> </li>
                        <li><a href="helper-classes.php">Helper Classes</a></li>
                        <li><a href="alerts.php">Alerts</a> </li>
                        <li><a href="animations.php">Animations</a> </li>
                        <li><a href="badges.php">Badges</a> </li>
                        <li><a href="breadcrumbs.php">Breadcrumbs</a> </li>
                        <li><a href="buttons.php">Buttons</a> </li>
                        <li><a href="collapse.php">Collapse</a> </li>
                        <li><a href="colors.php">Colors</a> </li>
                        <li><a href="dialogs.php">Dialogs</a> </li>
                        <li><a href="icons.php">Icons</a> </li>
                        <li><a href="labels.php">Labels</a> </li>
                        <li><a href="list-group.php">List Group</a> </li>
                        <li><a href="media-object.php">Media Object</a> </li>
                        <li><a href="modals.php">Modals</a> </li>
                        <li><a href="notifications.php">Notifications</a> </li>
                        <li><a href="pagination.php">Pagination</a> </li>
                        <li><a href="preloaders.php">Preloaders</a> </li>
                        <li><a href="progressbars.php">Progress Bars</a> </li>
                        <li><a href="range-sliders.php">Range Sliders</a> </li>
                        <li><a href="sortable-nestable.php">Sortable & Nestable</a> </li>
                        <li><a href="tabs.php">Tabs</a> </li>
                        <li><a href="thumbnails.php">Thumbnails</a> </li>
                        <li><a href="tooltips-popovers.php">Tooltips & Popovers</a> </li>
                        <li><a href="waves.php">Waves</a> </li>
                    </ul>
                </li>
                <li class="header">LABELS</li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span></a></li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span></a></li>
                <li><a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span></a></li>
            </ul>
        </div>