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
    <title>Authentication | RealEstate</title>
    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/font-awesome/css/font-awesome.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/simple-line-icons/css/simple-line-icons.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/plugins/ionicons/css/ionicons.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/css/app.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/css/style.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ url('public/assets/css/auth.css')}}" />
    <!-- Favicon -->
    <link rel="icon" href="{{ url('public/assets/images/favicon.ico')}}" type="image/x-icon">
    <style>
        .mtop {
            margin-top: 150px;
        }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="bgx">
    <!--================================-->
    <!-- User Singin Start -->
    <!--================================-->
    <div class=" ght-100v d-flex">
        @yield('content')

    </div>
    <!--/ User Singin End -->
    <!--================================-->
    <!-- Footer Script -->
    <!--================================-->
    <script src="{{ url('public/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ url('public/assets/plugins/popper/popper.js')}}"></script>
    <script src="{{ url('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('public/assets/plugins/pace/pace.min.js')}}"></script>
    <script src="{{ url('public/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ url('public/assets/js/custom.js')}}"></script>
</body>

</html>