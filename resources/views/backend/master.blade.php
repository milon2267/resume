<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Meteor | Responsive Admin Dashboard Template</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />
        
        <!-- Styles -->
        <link href="{{ asset('assets/plugins/pace-master/themes/blue/pace-theme-flash.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/plugins/uniform/css/default.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/waves/waves.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/3d-bold-navigation/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/slidepushmenus/css/component.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/weather-icons-master/css/weather-icons.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
        <!-- Theme Styles -->
        <link href="{{ asset('assets/css/meteor.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/layers/dark-layer.css') }}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
        
        <script src="{{ asset('assets/plugins/3d-bold-navigation/js/modernizr.js') }}"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="compact-menu">
        <div class="overlay"></div>
        {{-- <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">
            <h3><span class="pull-left">Messages</span><a href="javascript:void(0);" class="pull-right" id="closeRight"><i class="icon-close"></i></a></h3>
            <div class="slimscroll">
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar2.png" alt=""><span>Michael Lewis<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar3.png" alt=""><span>John Doe<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar4.png" alt=""><span>Emma Green<small>Nice to meet you</small></span></a>
                <a href="javascript:void(0);" class="showRight2"><img src="assets/images/avatar5.png" alt=""><span>Nick Doe<small>Nice to meet you</small></span></a>
            </div>
		</nav> --}}
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
            <h3><span class="pull-left">Michael Lewis</span> <a href="javascript:void(0);" class="pull-right" id="closeRight2"><i class="fa fa-angle-right"></i></a></h3>
            <div class="slimscroll chat">
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Duis aute irure dolor?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Lorem ipsum dolor sit amet, dapibus quis, laoreet et.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Ut ullamcorper, ligula.
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        In hac habitasse platea dict umst. ligula eu tempor eu id tincidunt.
                    </div>
                </div>
                <div class="chat-item chat-item-left">
                    <div class="chat-image">
                        <img src="assets/images/avatar2.png" alt="">
                    </div>
                    <div class="chat-message">
                        Curabitur pretium?
                    </div>
                </div>
                <div class="chat-item chat-item-right">
                    <div class="chat-message">
                        Etiam tempor. Ut tempor! ull amcorper.
                    </div>
                </div>
            </div>
            <div class="chat-write">
                <form class="form-horizontal" action="javascript:void(0);">
                    <input type="text" class="form-control" placeholder="Say something">
                </form>
            </div>
		</nav>
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index.html" class="logo-text"><span>MILON</span></a>
                    </div><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">You have 3 pending tasks!</p></li>
                                        <li class="dropdown-menu-list slimscroll tasks">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-success"><i class="fa fa-user"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">1m</span>
                                                        <p class="task-details">New user registered</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-primary"><i class="fa fa-refresh"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">3 Charts refreshed</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="task-icon badge badge-danger"><i class="fa fa-phone"></i></div>
                                                        <span class="badge badge-roundless badge-default pull-right">24m</span>
                                                        <p class="task-details">2 Missed calls</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="#" class="text-center">All Tasks</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">{{ Auth::user()->name ?? "N/A" }}<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="icon-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
                                        <li role="presentation"><a href="inbox.html"><i class="icon-envelope-open"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="lock-screen.html"><i class="icon-lock"></i>Lock screen</a></li>
                                        <li role="presentation">
                                            <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('login-form').submit();"><i class="icon-key m-r-xs"></i>Log out</a>

                                            <form action="{{ route('logout') }}" id="login-form" method="POST" style="display:none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
                        {{-- Dashboard Start Here --}}
                        <li class="@yield('dashboard_active')"><a href="{{ route('Dashboard') }}" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
                        
                        {{-- Profile Start --}}
                        <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Profile</p></a></li>
                        
                        {{-- Category Start Here --}}
                        <li class="droplink @yield('category_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"><i class="fas fa-cart-plus"></i></span><p>Category</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('category.index') }}" class="nav-link @yield('index')">Category Index</a></li>
                                <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li>
                            </ul>
                        </li>

                        {{-- Banner Start Here --}}
                        <li class="droplink @yield('banner_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Banner</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('banner.index') }}" class="nav-link @yield('banner')">Banner</a></li>
                                <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li>
                            </ul>
                        </li>
                        
                        {{-- About Start Here --}}
                        <li class="droplink @yield('about_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>About Me</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('about.index') }}" class="nav-link @yield('about')">About Me</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Education Start Here --}}
                        <li class="droplink @yield('education_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Education</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('education.index') }}" class="nav-link @yield('education')">Education</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Experience Start Here --}}
                        <li class="droplink @yield('experience_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Experience</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('experience.index') }}" class="nav-link @yield('experience')">Experience</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Skill Start Here --}}
                        <li class="droplink @yield('skill_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Skill</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('skill.index') }}" class="nav-link @yield('experience')">Skills</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Service Start Here --}}
                        <li class="droplink @yield('service_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Service</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('service.index') }}" class="nav-link @yield('service')">Service</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Review Start Here --}}
                        <li class="droplink @yield('review_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Review</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('review.index') }}" class="nav-link @yield('review')">Review</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Project Start Here --}}
                        <li class="droplink @yield('project_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Project</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('project.index') }}" class="nav-link @yield('project')">Project</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Contact Start Here --}}
                        <li class="droplink @yield('contact_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Contact</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('contact.index') }}" class="nav-link @yield('contact')">Contact</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Footer Start Here --}}
                        <li class="droplink @yield('footer_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Footer</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('footer.index') }}" class="nav-link @yield('contact')">Footer</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Social Start Here --}}
                        <li class="droplink @yield('social_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Social</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('social.index') }}" class="nav-link @yield('social')">Social</a></li>
                                {{-- <li><a href="{{ route('TrashList') }}" class="nav-link @yield('TrashList')">Trash</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Mailbox Start Here --}}
                        <li class="droplink @yield('message_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Mailbox</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('message') }}" class="nav-link @yield('message')">Inbox</a></li>
                                {{-- <li><a href="message-view.html">View Message</a></li>
                                <li><a href="compose.html">Compose</a></li> --}}
                            </ul>
                        </li>
                        
                        {{-- Setting Start Here --}}
                        <li class="droplink @yield('setting_active')"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-envelope-open"></span><p>Setting</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('setting.index') }}" class="nav-link @yield('message')">Setting</a></li>
                                {{-- <li><a href="message-view.html">View Message</a></li>
                                <li><a href="compose.html">Compose</a></li> --}}
                            </ul>
                        </li>
                        
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>UI Kits</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-notifications.html">Notifications</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-panels.html">Panels</a></li>
                                <li><a href="ui-progress.html">Progress Bars</a></li>
                                <li><a href="ui-sliders.html">Sliders</a></li>
                                <li><a href="ui-nestable.html">Nestable</a></li>
                                <li><a href="ui-tree-view.html">Tree View</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-layers"></span><p>Layouts</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="layout-blank.html">Blank Page</a></li>
                                <li><a href="layout-boxed.html">Boxed Page</a></li>
                                <li><a href="layout-horizontal-menu.html">Horizontal Menu</a></li>
                                <li><a href="layout-horizontal-menu-boxed.html">Boxed &amp; Horizontal Menu</a></li>
                                <li><a href="layout-horizontal-menu-minimal.html">Horizontal Menu Minimal</a></li>
                                <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                                <li><a href="layout-fixed-header.html">Fixed Header</a></li>
                                <li><a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a></li>
                                <li><a href="layout-menu-alt.html">Menu Alt</a></li>
                                <li><a href="layout-hover-menu.html">Hover Menu</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-grid"></span><p>Tables</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="table-static.html">Static Tables</a></li>
                                <li><a href="table-responsive.html">Responsive Tables</a></li>
                                <li><a href="table-data.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pencil"></span><p>Forms</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-image-crop.html">Image Crop</a></li>
                                <li><a href="form-image-zoom.html">Image Zoom</a></li>
                                <li><a href="form-select2.html">Select2</a></li>
                                <li><a href="form-x-editable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pie-chart"></span><p>Charts</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                                <li><a href="charts-morris.html">Morris</a></li>
                                <li><a href="charts-flotchart.html">Flotchart</a></li>
                                <li><a href="charts-chartjs.html">Chart.js</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-power"></span><p>Login</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="login.html">Login Form</a></li>
                                <li><a href="login-alt.html">Login Alt</a></li>
                                <li><a href="register.html">Register Form</a></li>
                                <li><a href="register-alt.html">Register Alt</a></li>
                                <li><a href="forgot.html">Forgot Password</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pointer"></span><p>Maps</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-present"></span><p>Extra</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="500.html">500 Page</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="todo.html">Todo</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="search.html">Search Results</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-energy"></span><p>Levels</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="droplink"><a href="#"><p>Level 1.1</p><span class="arrow"></span></a>
                                    <ul class="sub-menu">
                                        <li class="droplink"><a href="#"><p>Level 2.1</p><span class="arrow"></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Level 3.1</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level 2.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Level 1.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->

            @yield('content')
            
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>DEMOS</h3>
            </header>
            <div class="col-md-6 demo-block demo-selected demo-active">
                <p>Dark<br>Design</p>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin2/index.html"><p>Light<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block">
                <a href="../admin3/index.html"><p>Material<br>Design</p></a>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Horizontal<br>(Coming)</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
            <div class="col-md-6 demo-block demo-coming-soon">
                <p>Coming<br>Soon</p>
            </div>
        </nav>
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="{{ asset('assets/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/pace-master/pace.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/uniform/js/jquery.uniform.standalone.js') }}"></script>
        <script src="{{ asset('assets/plugins/offcanvasmenueffects/js/classie.js') }}"></script>
        <script src="{{ asset('assets/plugins/waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/3d-bold-navigation/js/main.js') }}"></script>
        <script src="{{ asset('assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/curvedlines/curvedLines.js') }}"></script>
        <script src="{{ asset('assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/meteor.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --}}
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


        @yield('footer_js')
        <script>
            @if (Session::has('message'));
            var type =  "{{ Session::get('alert-type', 'info') }}"
            switch(type){
                    case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                    case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                    case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
            }
            @endif
        </script>
        
    </body>
</html>