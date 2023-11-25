<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="" />
    <!-- Page Title -->
    <title>RealEstate | Admin</title>
    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/font-awesome/css/font-awesome.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/flag-icon/flag-icon.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/simple-line-icons/css/simple-line-icons.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/ionicons/css/ionicons.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/toastr/toastr.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/apex-chart/apexcharts.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/app.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('assets/css/style.min.css')}}" />

    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/datatables/jquery.dataTables.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/datatables/extensions/dataTables.jqueryui.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{ url('assets/plugins/datepicker/css/datepicker.min.css')}}">
    <!-- Favicon -->
    <link rel="icon" href="{{ url('assets/images/favicon.ico')}}" type="image/x-icon">

    <!-- HTML5 shim and Respond.js' for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js' doesn"t work if you view the page via file:// 
        -->
    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
      <![endif]-->
</head>

<body>
    <!--================================-->
    <!-- Page Container Start -->
    <!--================================-->
    <div class="page-container">
        <!--================================-->
        <!-- Page Sidebar Start -->
        <!--================================-->
        <div class="page-sidebar">
            <div class="logo">
                <a class="logo-img" href="{{ url('admin/dashboard') }}">
                    <img class="desktop-logo" src="{{ url('assets/images/logo.png')}}" alt="">
                    <img class="small-logo" src="{{ url('assets/images/small-logo.png')}}" alt="">
                </a>
                <i class="ion-ios-close-empty" id="sidebar-toggle-button-close"></i>
            </div>
            <!--================================-->
            <!-- Sidebar Menu Start -->
            <!--================================-->


            @include('partials._sidebar')

            <!--/ Sidebar Menu End -->
            <!--================================-->
            <!-- Sidebar Footer Start -->
            <footer!--================================-->
                @include('partials._side_footer')
                <!--/ Sidebar Footer End -->
        </div>
        <!--/ Page Sidebar End -->
        <!--================================-->
        <!-- Page Content Start -->
        <!--================================-->
        <div class="page-content">
            <!--================================-->
            <!-- Page Header Start -->
            <!--================================-->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input class="form-control search-input" name="search" placeholder="Type something..." type="text" />
                            <span class="input-group-btn">
                                <span id="close-search"><i class="ion-ios-close-empty"></i></span>
                            </span>
                        </div>
                    </form>
                </div>
                <!--================================-->
                <!-- Page Header  Start -->
                <!--================================-->
                @include('partials._page_header')
            </div>
            <!--/ Page Header End -->
            <!--================================-->
            <!-- Page Inner Start -->
            <!--================================-->
            <div class="page-inner">
                <!-- Main Wrapper -->
                @yield('content')
                <!--/ Main Wrapper End -->
            </div>
            <!--/ Page Inner End -->
            <!--================================-->
            <!-- Page Footer Start -->
            <!--================================-->
            <footer class="page-footer">
                <div class="pd-t-4 pd-b-0 pd-x-20">
                    <div class="tx-10 tx-uppercase">
                        <p class="pd-y-10 mb-0">Copyright&copy; {{date('Y')}} | All rights reserved. | RealEstate </p>
                    </div>
                </div>
            </footer>
            <!--/ Page Footer End -->
        </div>
        <!--/ Page Content End -->
    </div>
    <!--/ Page Container End -->
    <!--================================-->
    <!-- Scroll To Top Start-->
    <!--================================-->
    <a href="" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
    <!--/ Scroll To Top End -->
    <!--================================-->
    <!-- Setting Sidebar Start -->
    <!--================================-->

    <!--/ Setting Sidebar End  -->
    <!--================================-->
    <!-- Demo Sidebar Start -->
    <!--================================-->

    <!--/ Demo Sidebar End  -->
    <!--================================-->
    <!-- Footer Script -->
    <!--================================-->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('assets/plugins/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ url('assets/plugins/popper/popper.js')}}"></script>
    <script src="{{ url('assets/plugins/feather-icon/feather.min.js')}}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/plugins/pace/pace.min.js')}}"></script>

    <script src="{{ url('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('assets/plugins/datatables/responsive/dataTables.responsive.js')}}"></script>
    <script src="{{ url('assets/plugins/datatables/extensions/dataTables.jqueryui.min.js')}}"></script>


    <script src="{{ url('assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ url('assets/plugins/countup/counterup.min.js')}}"></script>
    <script src="{{ url('assets/plugins/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ url('assets/plugins/apex-chart/apexcharts.min.js')}}"></script>
    <script src="{{ url('assets/plugins/simpler-sidebar/jquery.simpler-sidebar.min.js')}}">
    </script>

    <script src="{{ url('assets/js/dashboard/projects-dashboard-init.js')}}"></script>
    <script src="{{ url('assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ url('assets/js/highlight.min.js')}}"></script>
    <script src="{{ url('assets/js/app.js')}}"></script>
    <script src="{{ url('assets/js/custom.js')}}"></script>
    <script src="{{ url('assets/plugins/datepicker/js/datepicker.min.js')}}"></script>
    <script src="{{ url('assets/plugins/datepicker/js/datepicker.es.js')}}"></script>

    <script>
        // Hoverable DataTable	
        $('#hoverTable').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: ''
            }
        });
    </script>

    <script>
        // Make Sunday and Saturday disabled
        var disabledDays = [0, 6];
        $('#disabled-days').datepicker({
            language: 'en',
            onRenderCell: function(date, cellType) {
                if (cellType == 'day') {
                    var day = date.getDay(),
                        isDisabled = disabledDays.indexOf(day) != -1;

                    return {
                        disabled: isDisabled
                    }
                }
            }
        })
    </script>

    @yield('script')
</body>

</html>