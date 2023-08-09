<!doctype html>

<html class="no-js" lang="">


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
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Roboto:ital,wght@0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ url('frontend/assets/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/magnific-popup.css') }}">
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
                                        <a class="navbar-brand" href="#home">
                                            <img src="{{ url('frontend/assets/images/logo.png') }}" />
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->



                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#home">HOME</a></li>
                                            <li><a href="#history">ABOUT US</a></li>
                                            <li><a href="#portfolio">PORTFOLIO</a></li>
                                            <li><a href="#pricing">PRICING</a></li>
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







    <div class="submit-page">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-5">        
            <div class="form-bg">
    
              <!-- <a href="#"><img src="/images/logo.png" alt="logo" class="logo"></a> -->
    
              
               <div class="admit form-bg">
                  <h2>Download Your Admit Card</h2>
               </div>
    
    
              <p class="note">Note: You have to make confirm your payment of tuition fees before downloading the admit card</p>
    
              <form>
                
    
                <span class="options-divider"> </span>
                <!-- <span class="option-br"></span> -->
    
                <div class="form-group">
                  <input type="number" name="student_id" class="form-control" placeholder="Student ID" required>
                </div>
    
                <div class="form-group">
                  <input type="text" name="Full Name" class="form-control" placeholder="Full Name">
                </div>
    
                <div class="form-group">
                  <input type="number" name="number" class="form-control" placeholder="Phone Number" required>
                </div>
    
        <!-- 
                 <div class="form-group">
    
                  <input class="form-check-input rounded-pill" type="checkbox" name="number" id="invalidCheck"  required>
    
                   <label class="form-check-label" for="invalidCheck">
                       Check here to Confirm
                   </label>
    
                 </div> -->
    
    
                  <div class="form-group">
    
                            <label class="form-checkbox">
    
                                <input type="checkbox" name="checkbox" required>
                                <span> Check here to Confirm </span>
    
                            </label>
    
                        </div>
    
    
    
    
    
    
          <!--  <div class="col-12">
    
                    <div class="form-check">
    
                      <input class="form-check-input rounded-pill" type="checkbox" value="" id="invalidCheck" required>
    
                      <label class="form-check-label" for="invalidCheck">
    
                        Agree to terms and conditions
                      </label>
    
                      <div class="invalid-feedback">
    
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
               -->
    
               
    
                <div class="form-group">
                  <button class="signup-btn">Submit</button>
                </div>
    
                <p class="term-policy">NOTE: Please fill out all fields correctly. <span>Use the valid Student ID and mobile.</span> </p>
              </form>
            </div>
    
           
          
    
          </div>
        </div>
      </div>
    </div>









<!--Footer section-->
<section class="footer">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <div class="main_footer">
                  <div class="row">

                      <div class="col-sm-6 col-xs-12">
                          <div class="flowus">
                              <a href=""><i class="fa fa-facebook"></i></a>
                              <a href=""><i class="fa fa-instagram"></i></a>
                              <a href=""><i class="fa fa-youtube"></i></a>
                              <a href=""><i class="fa fa-twitter"></i></a>
                              <a href=""><i class="fa fa-google-plus"></i></a>
                              {{-- <a href=""><i class="fa fa-dribbble"></i></a> --}}
                          </div>
                      </div>

                      <div class="col-sm-6 col-xs-12">

                          <div class="copyright_text">

                                <p class="wow fadeInRight" data-wow-duration="1s">Develop By
                                  <a href="#">Dev Team </a> © <?php echo date("Y"); ?>. All Rights
                                  Reserved 
                                </p>
                          </div>

                     

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section><!-- End off footer Section-->











</div>

<!-- START SCROLL TO TOP  -->

<div class="scrollup">
  <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="{{ url('frontend/assets/js/vendor/jquery-1.11.2.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>

<script src="{{ url('frontend/assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ url('frontend/assets/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ url('frontend/assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ url('frontend/assets/js/jquery.masonry.min.js') }}"></script>

<!--slick slide js -->
<script src="{{ url('frontend/assets/css/slick/slick.js') }}"></script>
<script src="{{ url('frontend/assets/css/slick/slick.min.js') }}"></script>


<script src="{{ url('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ url('frontend/assets/js/main.js') }}"></script>

</body>

</html>
