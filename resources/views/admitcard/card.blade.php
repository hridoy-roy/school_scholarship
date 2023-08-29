<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> --}}

  {{-- Bangla font --}}
  <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
  <link href="https://fonts.maateen.me/apona-lohit/font.css" rel="stylesheet">


    <!--Google Fonts link-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">


 <!--Theme custom css -->
 {{-- <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}"> --}}



    <style> legend.group-border {
        /* width: inherit; */
        /* Or auto */
        /* padding: 0 5px; */
        /* To give a bit of padding on the left and right */
        /* border-bottom: none; */
      }
      
      fieldset.group-border {
        border: 2px groove #000000 !important;
        background-color: #ffffff
        /* padding: 0 1.4em 1.4em 1.4em !important; */
        /* margin: 0 0 1.5em 0 !important; */
        /* -webkit-box-shadow: 0px 0px 0px 0px #000;
        box-shadow: 0px 0px 0px 0px #000; */
      }
      .group-border{
        padding: 3px 0px;

        
        font-size: 16px;
        font-weight: bold;

      }
      .control-label{
        padding: 6px 6px;
      }

      .space{
        padding: 3px 0px;
      }
      
      
      </style>
    
 
      


</head>
<body>
    
    <div class="container bg-dark bangla_font" style="padding: .6rem; ">

        <div class="container mt3 p-3" style="background-color: #e0e0e0">

            <div class="container-botto" style="display: flex; justify-content: space-between; align-items: center;">

            <div class="container">

                  <div class="row">

                    <div class="col-xl-3 col-lg-3 col-md-3">

                        <div class="admit-card">
                            

                            <div class="card" style="width: 25vh; float: left;" >
                                <img class="card-img-top" src="{{ url('assets/img/logo.jpg') }}" alt="Picture" >
                            </div>
                                        
                            <div style="width: 15vh; float: left; " >
                                    
                                <img class="card-img-top" src="{{ url('assets/img/main-logo.png') }}" alt="Picture" >
                            </div>
                        </div>
                    </div>

                
                    <div class="col-xl-5 col-lg-5 col-md-5">

                    <div style="text-align: center" class="admit-card">
                    
                        <h5> <b>দি স্টুডন্টে ওয়লেফয়োর এসোসয়িশেন সাভার</b> </h5>
                        <h5> <b>The Student Welfare Association Savar</b> </h5>
                        <h5> <b>বৃত্তি পরীক্ষা ২০২৩ ইং</b> </h5>
                        <h5> <b>রেজি নং: {{ $student->registration_no}}</b> </h5>
                      
                         
                   </div>
            </div> 


            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="admit-card">
                    
                    <fieldset class="group-border">
                        <legend class="group-border" style="text-align: center;">অফিস কর্তৃক পূরণীয় </legend>

                            <div class="row">

                                <div class="col-lg-6">
                                    <label class="control-label" for="name">বৃত্তি পরীক্ষার রোল:</label>
                                </div> 

                                <div class="col-lg-5 space">
                                    <input class="form-control input-sm" disabled="disabled" id="title1" name="title1" value=" {{ $student->roll_no}}" type="text">
                                </div>

                            </div>


                             <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name">রেজিস্ট্রেশন নং:</label>
                            </div>
                            <div class="col-lg-5 space">
                                <input class="form-control input-sm" disabled="disabled" id="title2" name="title2" value="{{ $student->registration_no}}" type="text">
                            </div>
                        </div>


                            <div class="row">
                                <div class="col-lg-6">
                                <label class="control-label" for="name">অঞ্চল:</label>
                                </div>
                               <div class="col-lg-5 space">
                                <input class="form-control input-sm" disabled="disabled" id="title3" name="title3" value=" {{ $student->area}}" type="text">
                              </div>
                           </div>
                  
                    </fieldset>  
            
                </div> 
                             
                </div>
                </div>
             
               </div>    {{-- Row --}}
        
            </div>   {{--  container-bottom --}}


            <br>

            <div class="container-bottom">

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">পরীক্ষার্থীর নাম</span>
                    <label class="form-control"> <b> {{ $student->name_bn}} </b> </label>

                    <span class="input-group-text text-white bg-dark">পিতার নাম</span>
                    <label class="form-control"> <b> {{ $student->father_name_bn}} </b> </label>
            
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">শিক্ষা প্রতিষ্ঠানের নাম</span>
                    <label class="form-control"> <b> {{ $student->school_madrasa}} </b> </label>
            
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">শ্রেণী</span>
                    <label class="form-control"> <b> {{ $student->class_division}} </b></label>

                    <span class="input-group-text text-white bg-dark">রোল</span>
                    <label class="form-control"> <b> {{ $student->class_roll}} </b></label>

                    <span class="input-group-text text-white bg-dark">বিভাগ</span>
                    <label class="form-control"> <b> {{ $student->class_section}} </b></label>

                    <span class="input-group-text text-white bg-dark">পরীক্ষার সময়</span>
                    <label class="form-control"> <b> {{ $student->dob}} </b></label>
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">বর্তমান ঠিকানা</span>
                    <label class="form-control"> <b> {{ $student->present_address}} </b></label>

                    <span class="input-group-text text-white bg-dark">মোবাইল</span>
                    <label class="form-control"> <b> {{ $student->mobile}} </b></label>

                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">পরীক্ষার তারিখ</span>
                    <label class="form-control"> <b> {{ $student->dob}} </b></label>

                    <span class="input-group-text text-white bg-dark">কেন্দ্র</span>
                    <label class="form-control"> <b> {{ $student->area}} </b></label>
                </div>

            </div> {{--  container-bottom --}}

        </div> {{--  container mt3 --}}

    </div> {{--  container bg-dark --}}


                <div class="container">
                    <div class="row">


                        <div class="col-xl-4 col-lg-4 col-md-4">  


                        </div>

                        
                        <div class="col-xl-4 col-lg-4 col-md-4">  

                            <button style="margin: 30px 80px " type="button" class="btn btn-dark">Download PDF</button>


                        </div>


                        <div class="col-xl-4 col-lg-4 col-md-4">  

                            <div class="row" style="padding:30px 0px; text-align:center;">
        
                                <h6> <b>পরিচালক</b> </h6>
                                <h6>  <b>দি স্টুডন্টে ওয়লেফয়োর এসোসয়িশেন সাভার</b></h6>
                
                            </div>


                        </div>


                    </div>
                </div>
            

 

    {{-- <div class="form-group">
        <button class="signup-btn">Submit</button>
      </div> --}}


        {{-- <div class="container">

            <div class="row" style="float: right; padding:30px 0px; text-align:center;">
        
                <h6> <b>পরিচালক</b> </h6>
                <h6>  <b>দি স্টুডন্টে ওয়লেফয়োর এসোসয়িশেন সাভার</b></h6>

            </div>
        </div> --}}








</body>
</html>
