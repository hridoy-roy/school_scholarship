<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  {{-- Bangla font --}}
  <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
  <link href="https://fonts.maateen.me/apona-lohit/font.css" rel="stylesheet">


    <!--Google Fonts link-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/css/slick/slick.css">
    <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    {{-- card right section --}}
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" /> --}}

    <style> legend.group-border {
        width: inherit;
        /* Or auto */
        padding: 0 10px;
        /* To give a bit of padding on the left and right */
        border-bottom: none;
      }
      
      fieldset.group-border {
        border: 2px groove #000000 !important;
        padding: 0 1.4em 1.4em 1.4em !important;
        margin: 0 0 1.5em 0 !important;
        -webkit-box-shadow: 0px 0px 0px 0px #000;
        box-shadow: 0px 0px 0px 0px #000;
      }
      
      </style>


</head>
<body>
    
    <div class="container bg-dark bangla_font" style="padding: .6rem; ">

        <div class="container mt3 p-3" style="background-color: #e0e0e0">

            <div class="container-botto" style="display: flex; justify-content: space-between; align-items: center;">

                  <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-3">

                        <div class="admit-card">
                            

                            <div class="card" style="width: 20vh; float: left;" >
                                <img class="card-img-top" src="{{ url('assets/img/logo.jpg') }}" alt="Picture" >
                            </div>
                                        
                            <div style="width: 10vh; float: right; " >
                                    
                                <img class="card-img-top" src="{{ url('assets/img/main-logo.png') }}" alt="Picture" >
                            </div>
                        </div>
                    </div>


                

                
                <div class="col-xl-6 col-lg-6 col-md-6">

                    <div style="text-align: center" class="admit-card">
                    
                        <h5> <b>দি স্টুডন্টে ওয়লেফয়োর এসোসয়িশেন সাভার</b> </h5>
                        <h5> <b>The Student Welfare Association Savar</b> </h5>
                        <h5> <b>বৃত্তি পরীক্ষা ২০২৩ ইং</b> </h5>
                        <h5> <b>রেজি নং - ঢ -০৮৫৭৭৩</b> </h5>
                      
                         
                   </div>
            </div>





            <div class="col-xl-3 col-lg-3 col-md-3">

                <div class="admit-card">
                    
                        
                    <fieldset class="group-border">
                        <legend class="group-border">অফিস কর্তৃক পূরণীয় </legend>

                        <br>


                        <div class="row">

                            <div class="col-lg-2">
                                <label class="control-label" for="Name">বৃত্তি পরীক্ষার রোল</label>
                            </div>

                            <div class="col-lg-4">
                                <input class="form-control input-sm" disabled="disabled" id="Name" name="Name" placeholder="Nome Documento" value="A134-MULTAS" type="text">
                            </div>

                        </div>

                        <br>

                             <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" for="Name">রেজিস্ট্রেশন নং</label>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control input-sm" disabled="disabled" id="Name" name="Name" placeholder="Nome Documento" value="A134-MULTAS" type="text">
                            </div>
                        </div>

                        <br>

                                  <div class="row">
                            <div class="col-lg-2">
                                <label class="control-label" for="Name">অঞ্চল</label>
                            </div>
                            <div class="col-lg-4">
                                <input class="form-control input-sm" disabled="disabled" id="Name" name="Name" placeholder="Nome Documento" value="A134-MULTAS" type="text">
                            </div>
                        </div>

                        <br>

                  
                    </fieldset>
                  
    
                      
                             
                    </div>
                </div>
                     

             
               </div>    {{-- Row --}}
        
            </div>   {{--  container-bottom --}}


            <br>

            <div class="container-bottom">

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">Name</span>
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-text text-white bg-dark">Fathers Name</span>
                    <input type="text" class="form-control" placeholder="">
            
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">School Name</span>
                    <input type="text" class="form-control" placeholder="">
            
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">Class</span>
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-text text-white bg-dark">Roll</span>
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-text text-white bg-dark">Group</span>
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-text text-white bg-dark">Time of Exam</span>
                    <input type="text" class="form-control" placeholder="">
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">Present Address</span>
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-text text-white bg-dark">Contact No.</span>
                    <input type="text" class="form-control" placeholder="">
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">Date of Exam</span>
                    <input type="text" class="form-control " placeholder="">
                    <span class="input-group-text text-white bg-dark">Vanues</span>
                    <input type="text" class="form-control" placeholder="">
                </div>

            </div> {{--  container-bottom --}}

        </div> {{--  container mt3 --}}

    </div> {{--  container bg-dark --}}

</body>
</html>
