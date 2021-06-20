<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Meteor | Login - Sign in</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />
        
        <!-- Styles -->
        <link href="{{ asset('assets/plugins/pace-master/themes/blue/pace-theme-flash.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/plugins/uniform/css/default.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.cs') }}s" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css' )}}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/waves/waves.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/plugins/3d-bold-navigation/css/style.css') }}" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="{{ asset('assets/css/meteor.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/layers/dark-layer.css') }}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
        
        <script src="{{ asset('assets/plugins/3d-bold-navigation/js/modernizr.js') }}"></script>
        <script src="{{ asset('assets/plugins/offcanvasmenueffects/js/snap.svg-min.js') }}"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-white" id="js-alerts">
                                <div class="panel-body">
                                    <div class="login-box">
                                        <a href="index.html" class="logo-name text-lg text-center m-t-xs">Milon Hossain</a>
                                        <p class="text-center m-t-md">Please login into your account.</p>
                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="alert alert-danger" :errors="$errors" />
                                        <form class="m-t-md" action="{{ route('password.confirm') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control password" placeholder="Password" required>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block">Confirm Password</button>
                                            <a href="{{ route('password.request') }}" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                            <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                            <a href="{{ route('register') }}" class="btn btn-default btn-block m-t-md">Create an account</a>
                                        </form>
                                        
                                        <p class="text-center m-t-xs text-sm">2016 &copy; stacks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

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
        <script src="{{ asset('assets/js/meteor.min.js') }}"></script>
        
    </body>
</html>