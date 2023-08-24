
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admit Card</title>





</head>
<style>
    .top-side {
        margin-top: 20px;
        margin-left: 220px;
        margin-right: 20px;
        margin-bottom: -20px;
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

    .exam {
        width: 40%;
    }

    .father {
        width: 43.5%;
    }

    .school {
        width: 87.5%;
    }

    .roll {
        width: 30%;
    }

    .group {
        width: 20%;
    }

    .time {
        width: 23%;
    }

    .address {
        width: 39%;
    }

    .mobile {
        width: 41%;
    }

    .exam-date {
        width: 39%;
    }

    .exam-center {
        width: 46.8%;
    }

    .class-name {
        width: 10% !important;
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
        width: 200px;
        height: 200px;
    }

    @media print {

        .top-side {
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: -20px;
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

        .father {
            width: 150px !important;
        }

        .school {
            width: 400px !important;
        }

        .class {
            width: 15px !important;
        }

        .roll {
            width: 15px !important;
        }

        .time {
            width: 100px !important;
        }

        .class-name {
            width: 80px !important;
        }

        .group {
            width: 130px !important;
        }

        .address {
            width: 150px !important;
        }

        .exam-center {
            width: 185px !important;
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
            width: 100px;
            height: 100px;
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
                            <img src="{{ asset('upload/profile/' . $student['image']) }}" class="logo" alt=""
                                srcset="" />
                        </div>

                        <div class="top-component" style="margin-top:-20px;">
                            <img class="card-img-top" style="width: 100px" src="{{ asset('assets/admit/logo.png') }}"
                                alt="Picture" />
                            <h3><b>দি স্টুডেন্ট ওয়েলফেয়ার এসোসিয়েশন সাভার</b></h3>
                            <h5 style="line-height:0" class="eng-text"><b>The Student Welfare Association Savar</b></h5>
                            <h5 style="line-height:0"><b>বৃত্তি পরীক্ষা ২০২৩ ইং</b></h5>
                            <h5 style="line-height:0"><b>রেজি নং - ঢ -০৮৫৭৭৩</b></h5>
                        </div>
                        <div class="top-component top-office" style="margin-top:30px;">
                            <fieldset class="group-border">
                                <legend class="group-border" style="text-align: center;">অফিস কর্তৃক পূরণীয়
                                </legend>

                                <div class="row">

                                    <div class="col-lg-6">
                                        <label class="control-label" for="name">বৃত্তি পরীক্ষার রোল:</label>
                                    </div>

                                    <div class="col-lg-5 space">
                                        <input class="form-control input-sm office" disabled="disabled" id="title1"
                                            name="title1" value="{{ $student['roll_no'] }}" type="text">
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="control-label" for="name">রেজিস্ট্রেশন নং:</label>
                                    </div>
                                    <div class="col-lg-5 space">
                                        <input class="form-control input-sm office" disabled="disabled" id="title2"
                                            name="title2" value="{{ $student['registration_no'] }}" type="text">
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="control-label" for="name">অঞ্চল:</label>
                                    </div>
                                    <div class="col-lg-5 space">
                                        <input class="form-control input-sm office" disabled="disabled" id="title3"
                                            name="title3" value="{{ $student['area'] }}" type="text">
                                    </div>
                                </div>

                            </fieldset>

                </center>

                <div class="container-bottom" style="margin-top:50px !important;">

                    <div class="input-group md-3" style="border: solid black;">
                        <span class="input-group-text text-white bg-dark">পরীক্ষার্থীর নাম : </span>
                        <input type="text" class="form-control exam" placeholder="" value="{{ $student['name_bn'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">
                        <span class="input-group-text text-white bg-dark">পিতার নাম :</span>
                        <input type="text" class="form-control father" placeholder=""
                            value="{{ $student['father_name_bn'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">

                    </div>

                    <div class="input-group md-3" style="border: solid black;">
                        <span class="input-group-text text-white bg-dark">শিক্ষা প্রতিষ্ঠানের নাম : </span>
                        <input type="text" class="form-control school" placeholder=""
                            value="{{ $student['institute']['name'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">

                    </div>

                    <div class="input-group md-3" style="border: solid black;">
                        <span class="input-group-text text-white bg-dark">শ্রেণী : </span>
                        <input type="text" class="form-control class-name" placeholder=""
                            value="{{ $student['student_class']['name'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">
                        <span class="input-group-text text-white bg-dark">রোল : </span>
                        <input type="text" class="form-control roll" placeholder="" value="{{ $student['roll_no'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">
                        <span class="input-group-text text-white bg-dark">বিভাগ: </span>
                        <input type="text" class="form-control group" placeholder=""
                            value="{{ $student['class_section'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">
                        <span class="input-group-text text-white bg-dark">পরীক্ষার সময় : </span>
                        <input type="text" class="form-control time"
                            style=" border-width : 0;background-color:#e0e0e0;" placeholder=""
                            value="{{ \Carbon\Carbon::parse($student['exam']['exam_time'])->format('g:i A') }}">
                    </div>

                    <div class="input-group md-3" style="border: solid black;">
                        <span class="input-group-text text-white bg-dark">বর্তমান ঠিকানা : </span>
                        <input type="text" class="form-control address" placeholder=""
                            value="{{ $student['present_address'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">
                        <span class="input-group-text text-white bg-dark">মোবাইল : </span>
                        <input type="text" class="form-control mobile" placeholder=""
                            value="{{ $student['mobile'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                    </div>

                    <div class="input-group md-3" style="border: solid black;">
                        <span class="input-group-text text-white bg-dark">পরীক্ষার তারিখ : </span>
                        <input type="text" class="form-control exam-date" placeholder=""
                            value="{{ $student['present_address'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">
                        <span class="input-group-text text-white bg-dark">কেন্দ্র : </span>
                        <input type="text" class="form-control exam-center" placeholder=""
                            value="{{ $student['examCenter']['name'] }}"
                            style=" border-width : 0;background-color:#e0e0e0;">
                    </div>

                </div>

            </div>
        </div>

        <div class="footer">

            <div style="float: right; padding:30px 0px; text-align:center;">


                <h4> <b>পরিচালক</b> </h4>
                <h4> <b>দি স্টুডেন্ট ওয়েলফেয়ার এসোসিয়েশন সাভার</b></h4>

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