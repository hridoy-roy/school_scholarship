<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>School Scholarship</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!--Google Fonts link-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Roboto:ital,wght@0,300;0,400;0,500;1,400&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ url('frontend/assets/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact-us.css') }}">
    <!--<link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap-theme.min.css') }}">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/plugins.css') }}" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/responsive.css') }}" />

    <script src="{{ url('frontend/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">

    <div class='preloader'>
        <div class='loaded'>&nbsp;</div>
    </div>

    <div class="culmn">
        <header id="main_menu" class="header navbar-fixed-top">
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="" href="#home">
                                            {{-- <img src="{{ url('frontend/assets/images/logo.png') }}" /> --}}
                                            <h2>SWAS</h2>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="{{ route('frontend.index') }}">HOME</a></li>
                                            <li><a href="#history">ABOUT US</a></li>
                                            <li><a href="#portfolio">PORTFOLIO</a></li>
                                            <li><a href="{{ route('students.create') }}">Registration</a></li>
                                            <li><a href="/result">Result</a></li>
                                            <li><a href="#team">TEAM</a></li>
                                            <li><a href="#blog">BLOG</a></li>
                                            <li><a href="#contact">CONTACT</a></li>
                                            {{-- <li><a href="{{route('admitcard.submit')}}">Admit Card Download</a></li> --}}

                                            {{-- href="{{url($team->linkedin)}}" --}}

                                        </ul>

                                    </div>

                                </div>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </header>
        <!--End of header -->
