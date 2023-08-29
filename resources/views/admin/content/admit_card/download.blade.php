<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admit Card</title>
</head>
<style>
    .input-group {
        padding:5px;
    }

    .top-side {
        margin-top: 20px;
        margin-left: 220px;
        margin-right: 20px;
        margin-bottom: -20px;
        transform: translateX(-6%);
    }

    .top-component {
        margin-left: 20px;
        margin-right: 20px;
        margin-bottom: 20px;
    }

    .all-border {
        padding: 10px 10px 10px 10px;
        margin: 80px 80px 80px 80px;
    }

    .student {
        width: 40%;
    }

    .exam {
        width: 40%;
    }

    .father {
        width: 40%;
    }

    .school {
        width: 40%;
    }

    .roll {
        width: 45%;
    }

    .group {
        width: 40%;
    }

    .address {
        width: 39%;
    }

    .mobile {
        width: 40%;
    }

    .exam-date {
        width: 40%;
    }

    .exam-center {
        width: 40%;
    }

    .time {
        width: 41%;
    }

    .class-name {
        width: 40% !important;
    }

    .footer {
        margin-top: -80px;
        margin-right: 150px !important;
        font-weight: bold;
    }

    .eng-text {
        font-family: "Times New Roman", Times, serif;
        font-size: 15px;
    }

    .logo {
        width: 180px;
        height: 180px;
    }

    .mb-3 {
        margin-bottom: 3px;
    }

    @media print {
        legend{
            margin-bottom: 0 !important;
        }
        .group-border{
            padding: 0 !important;
        }
        .top-side {
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: -20px;
            transform: translateX(-2%);
        }

        .top-logo {
            margin-bottom: 50px !important;
        }

        .top-office {
            margin-top: 80px !important;
            margin-bottom: 50px !important;
        }

        .all-border {
            background-color: red !important;
            padding: 10px 10px 10px 10px;
            margin: 10px 10px 10px 10px;
        }

        .student {
            width: 20% !important;
        }

        .father {
            width: 20% !important;
        }

        .school {
            width: 39% !important;
        }

        .class {
            width: 20% !important;
        }

        .roll {
            width: 48% !important;
        }

        .time {
            width: 41% !important;
        }

        .class-name {
            width: 80px !important;
        }

        .group {
            width: 20% !important;
        }

        .mobile {
            width: 20% !important;
        }

        .address {
            width: 37% !important;
        }

        .exam-date {
            width: 20% !important;
        }

        .exam-center {
            width: 40% !important;
        }

        .footer {
            margin-top: 20px;
            margin-right: 30px !important;
            font-weight: bold;
        }

        .eng-text {
            font-family: "Times New Roman", Times, serif;
            font-size: 13px;
        }

        .logo {
            margin-top: 50px !important;
            width: 130px;
            height: 130px;
        }

        .mb-3 {
            margin-bottom: 3px;
        }

        .input-group {
            padding:5px;
        }

        .footer {
            page-break-after: always;
        }
    }
</style>

<body>
    @foreach ($students as $student)
    <div style="">

        <div style="border: 10px solid black;background-color:#e0e0e0;" class="all-border">

            <center>

                <div style="display:flex;width:100%;" class="top-side">

                    <div class="top-component top-logo" style="margin-top:30px;">
                        <img src="{{ asset('upload/profile/' . $student['image']) }}" class="logo" alt="" srcset="" />
                    </div>

                    <div class="top-component" style="margin-top:-20px;">
                        <img class="card-img-top" style="width: 100px" src="{{ asset('assets/admit/logo.png') }}" alt="Picture" />
                        <h3><b>The Student Welfare Association Savar</b></h3>
                        <h4 style="line-height:20px" class="eng-text"><b>The Student Welfare Association Savar</b></h4>
                        <h5 style="line-height:30px"><b>Scholarship Exam Date 2023</b></h5>
                        <h5><b>Reg. No. {{$student['registration_no']}}</b></h5>
                    </div>
                    <div class="top-component top-office" style="margin-top:20px;">
                        <fieldset class="group-border" style="padding: 10px">
                            <legend class="group-border" style="text-align: center; margin-bottom:10px">Fill By The Office
                            </legend>

                            <div class="row">

                                <div class="col-lg-6">
                                    <label class="control-label" for="name">Scholarship Candidate Roll:</label>
                                </div>

                                <div class="col-lg-5 space">
                                    <input class="form-control input-sm office" disabled="disabled" id="title1" name="title1" value="{{ $student['roll_no'] }}" type="text">
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="control-label" for="name">Registration No :</label>
                                </div>
                                <div class="col-lg-5 space">
                                    <input class="form-control input-sm office" disabled="disabled" id="title2" name="title2" value="{{ $student['registration_no'] }}" type="text">
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="control-label" for="name">Rigion :</label>
                                </div>
                                <div class="col-lg-5 space">
                                    <input class="form-control input-sm office" disabled="disabled" id="title3" name="title3" value="{{ $student['area'] }}" type="text">
                                </div>
                            </div>

                        </fieldset>

            </center>

            <div class="container-bottom" style="margin-top:10px !important;">

                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark student">Student Name : </span>
                    <input type="text" disabled class="form-control exam" placeholder="" value="{{ $student['name_bn'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                    <span class="input-group-text text-white bg-dark">Father Name :</span>
                    <input type="text" disabled class="form-control father" placeholder="" value="{{ $student['father_name_bn'] }}" style=" border-width : 0;background-color:#e0e0e0;">

                </div>

                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark">School Name : </span>
                    <input type="text" disabled class="form-control school" placeholder="" value="{{ $student['institute']['name'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                    <span class="input-group-text text-white bg-dark">Class : </span>
                    <input type="text" disabled class="form-control class-name" placeholder="" value="{{ $student['student_class']['name'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                </div>

                <div class="input-group mb-3" style="border:1px solid black;">

                    <span class="input-group-text text-white bg-dark">Roll : </span>
                    <input type="text" disabled class="form-control roll" placeholder="" value="{{ $student['roll_no'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                    <span class="input-group-text text-white bg-dark">Division: </span>
                    <input type="text" disabled class="form-control group" placeholder="" value="{{ $student['class_section'] }}" style=" border-width : 0;background-color:#e0e0e0;">

                </div>

                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark">Present Address : </span>
                    <input type="text" disabled class="form-control address" placeholder="" value="{{ $student['present_address'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                    <span class="input-group-text text-white bg-dark">Mobile : </span>
                    <input type="text" disabled class="form-control mobile" placeholder="" value="{{ $student['mobile'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                </div>

                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark">Exam Time : </span>
                    <input type="text" disabled class="form-control time" style=" border-width : 0;background-color:#e0e0e0;" placeholder="" value="{{ \Carbon\Carbon::parse($student['exam']['exam_time'])->format('g:i A') }}">
                    <span class="input-group-text text-white bg-dark">Exam Date : </span>
                    <input type="text" disabled class="form-control exam-date" placeholder="" value="{{ $student['present_address'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                </div>
                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark">Center : </span>
                    <input type="text" disabled class="form-control exam-center" placeholder="" value="{{ $student['examCenter']['name'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                </div>

            </div>

        </div>
    </div>

    <div class="footer">

        <div style="float: right; padding:30px 0px; text-align:center;">
            <h4> <b>Director</b> </h4>
            <h4> <b>The Student welfare association Savar</b></h4>
        </div>
    </div>
    <br>
    <br>
    <br>


    </div>
    </div>
    @endforeach
</body>

</html>
