<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script> 

        <link rel="shortcut icon" href="{{ asset('Admin/images/favicon_1.ico') }}">
        <!-- Base Css Files -->
        <link href="{{ asset('Admin/assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/cb4bbf46f0.js" crossorigin="anonymous"></script>
        <!-- Font Icons -->
        <link href="{{ asset('Admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('Admin/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('Admin/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('Admin/css/animate.css') }}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('Admin/css/waves-effect.css') }}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ asset('Admin/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('Admin/css/helper.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('Admin/js/modernizr.min.js') }}"></script>

</head>
<body class="fixed-left">
        
    <!-- Begin page -->
      <div id="wrapper">
                        <!-- Authentication Links -->
                        @guest
                           
                            @else

                            <!-- Top Bar Start -->
                                    <div class="topbar">
                                        <!-- LOGO -->
                                        <div class="topbar-left">
                                            <div class="text-center">
                                                <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Inventory </span></a>
                                            </div>
                                        </div>
                                        <!-- Button mobile view to collapse sidebar menu -->
                                        <div class="navbar navbar-default" role="navigation">
                                            <div class="container">
                                                <div class="">
                                                    <div class="pull-left">
                                                        <button class="button-menu-mobile open-left">
                                                            <i class="fa fa-bars"></i>
                                                        </button>
                                                        <span class="clearfix"></span>
                                                    </div>
                                                    <form class="navbar-form pull-left" role="search">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                                        </div>
                                                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                                    </form>

                                                    <ul class="nav navbar-nav navbar-right pull-right">
                                                        <li class="dropdown hidden-xs">
                                                            <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                                                <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-lg">
                                                                <li class="text-center notifi-title">Notification</li>
                                                                <li class="list-group">
                                                                <!-- list item-->
                                                                <a href="javascript:void(0);" class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <em class="fa fa-user-plus fa-2x text-info"></em>
                                                                        </div>
                                                                        <div class="media-body clearfix">
                                                                            <div class="media-heading">New user registered</div>
                                                                            <p class="m-0">
                                                                            <small>You have 10 unread messages</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <!-- list item-->
                                                                    <a href="javascript:void(0);" class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <em class="fa fa-diamond fa-2x text-primary"></em>
                                                                        </div>
                                                                        <div class="media-body clearfix">
                                                                            <div class="media-heading">New settings</div>
                                                                            <p class="m-0">
                                                                            <small>There are new settings available</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    </a>
                                                                    <!-- list item-->
                                                                    <a href="javascript:void(0);" class="list-group-item">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                                        </div>
                                                                        <div class="media-body clearfix">
                                                                            <div class="media-heading">Updates</div>
                                                                            <p class="m-0">
                                                                            <small>There are
                                                                                <span class="text-primary">2</span> new updates available</small>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    </a>
                                                                <!-- last list item -->
                                                                    <a href="javascript:void(0);" class="list-group-item">
                                                                    <small>See all notifications</small>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="hidden-xs">
                                                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                                        </li>
                                                        <li class="hidden-xs">
                                                            <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('admin/images/avatar-1.jpg') }}" alt="user-img" class="img-circle"> </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                                                <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                                                <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                                    <i class="md md-settings-power"></i> Logout</a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                        @csrf
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--/.nav-collapse -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Top Bar End -->

                                <!-- ========== Left Sidebar Start ========== -->

                                <div class="left side-menu">
                                    <div class="sidebar-inner slimscrollleft">
                                       
                                        <!--- Divider -->
                                        <div id="sidebar-menu">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('home') }}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pos') }}" class="waves-effect"><i class="md md-home"></i><span class="text-primary"> <b>POS</b> </span></a>
                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fa-solid fa-users"></i><span> Employess </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('add.empolyee') }}">Add New</a></li>
                                                        <li><a href="{{ route('all.empolyee') }}">All Employees </a></li>
                                                    </ul>
                                                </li>


                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fa-solid fa-users"></i><span> Customers </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('add.customer') }}">Add Customer</a></li>
                                                        <li><a href="{{ route('all.customer') }}">All Customer </a></li>
                                                    </ul>
                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fa-solid fa-users"></i><span> Suppliers </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('add.supplier') }}">Add Supplier</a></li>
                                                        <li><a href="{{ route('all.supplier') }}">All Supplier </a></li>
                                                    </ul>
                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fa-solid fa-users"></i><span> salary (EMP) </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('add.salary') }}">Add salary</a></li>
                                                        <li><a href="{{ route('add.advance.salary') }}">Advance_salary</a></li>
                                                        <li><a href="{{ route('all.salary') }}">All salary </a></li>
                                                        <li><a href="{{ route('pay.salary') }}">Pay salary </a></li>
                                                    </ul>
                                                </li>

                                                
                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fa-solid fa-users"></i><span> Category </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('add.category') }}">Add Category</a></li>
                                                        <li><a href="{{ route('all.category') }}">All Category </a></li>
                                                    </ul>
                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fa-solid fa-users"></i><span> Product </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('add.product') }}">Add Product</a></li>
                                                        <li><a href="{{ route('all.product') }}">All Product </a></li>
                                                    </ul>
                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fa-solid fa-users"></i><span> Expense </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('add.expense') }}">Add expense</a></li>
                                                        <li><a href="{{ route('all.expense') }}">All expense </a></li>
                                                    </ul>
                                                </li>

                                                <li class="has_sub">
                                                    <a href="#" class="waves-effect"><i class="fa-solid fa-users"></i><span> Attendence </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                                    <ul class="list-unstyled">
                                                        <li><a href="{{ route('take.attendence') }}">Take Attendence</a></li>
                                                        <li><a href="{{ route('all.attendence') }}">All Attendence </a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{ route('setting') }}" class="waves-effect"><i class="md md-event"></i><span> Setting </span></a>
                                                </li>
                                                
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- Left Sidebar End --> 
                               
                        @endguest
               
        </div>
   
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('Admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Admin/js/waves.js') }}"></script>
    <script src="{{ asset('Admin/js/wow.min.js') }}"></script>
    <script src="{{ asset('Admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Admin/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/chat/moment-2.2.1.js') }}"></script>
    <script src="{{ asset('Admin/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/jquery-detectmobile/detect.js') }}"></script>
    <script src="{{ asset('Admin/assets/fastclick/fastclick.js') }}"></script>
    <script src="{{ asset('Admin/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('Admin/assets/jquery-blockui/jquery.blockUI.js') }}"></script>

    <!-- sweet alerts -->
    <script src="{{ asset('Admin/assets/sweet-alert/sweet-alert.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/sweet-alert/sweet-alert.init.js') }}"></script>

    <!-- flot Chart -->
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('Admin/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

    <!-- Counter-up -->
    <script src="{{ asset('Admin/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Admin/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
    
    <!-- CUSTOM JS -->
    <script src="{{ asset('Admin/js/jquery.app.js') }}"></script>

    <!-- Dashboard -->
    <script src="{{ asset('Admin/js/jquery.dashboard.js') }}"></script>

    <!-- Chat -->
    <script src="{{ asset('Admin/js/jquery.chat.js') }}"></script>

    <!-- Todo -->
    <script src="{{ asset('Admin/js/jquery.todo.js') }}"></script>


    <script src="{{ asset('Admin/assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/datatables/dataTables.bootstrap.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

    <script type="text/javascript">
        /* ==============================================
        Counter Up
        =============================================== */
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });
    </script>

</body>
</html>
