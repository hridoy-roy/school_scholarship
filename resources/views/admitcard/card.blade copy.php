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


</head>
<body>
    
    <div class="container bg-dark bangla_font" style="padding: .6rem; ">
        <div class="container mt3 p-3" style="background-color: #e0e0e0">

            <div class="row">

                <div class="col-xl-2 col-lg-2 col-md-2">

                    <div class="admit-card">

                            <div class="container-bottom" style="display: flex; justify-content: space-between; align-items: center;">
                        
                            <div class="card" style="width: 40vh; float: left;" >
                                <img class="card-img-top" src="{{ url('assets/img/logo.jpg') }}" alt="Picture" >
                            </div>
                                        
                            <div style="width: 30vh; " >
                                    
                                <img class="card-img-top" src="{{ url('assets/img/main-logo.png') }}" alt="Picture" >
                            </div>

                    </div>
                </div>
                

                <div class="col-xl-2 col-lg-2 col-md-2">

                    <div class="admit-card">
                
                  <div class="row" style="text-align: center;">
                    <h2>দি স্টুডন্টে ওয়লেফয়োর এসোসয়িশেন সাভার</h2>
                    <h2>The Student Welfare Association Savar</h2>

                    {{-- <div class="col"> --}}
                        {{-- <div class="row"> --}}
                         
                            <div class="col text-dark">
                                <h4>Examination</h4>
                            </div>
                            <div class="col text-dark">
                                <h4>20</h4>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="" name="">
                            </div>
                            <h4 class="text-dark">Admit Card</h4>
                        {{-- </div> --}}

                    {{-- </div> --}}

                </div>

            </div>

        </div>




        
            </div>



        </div>


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
            </div>

        </div>

    </div>

</body>
</html>
