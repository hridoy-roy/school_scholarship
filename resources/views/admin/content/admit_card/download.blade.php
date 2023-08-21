<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admit Card</title>
    <link href='http://sonnetdp.github.io/nikosh/css/nikosh.css' rel='stylesheet' type='text/css'>

</head>
<style>
    @font-face {
        font-family: 'Nikosh', sans-serif;
        src: url('/assets/font/Nikosh.ttf');
    }

    .custom-font {
        font: normal 20px/18px 'Nikosh', sans-serif;
    }

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

    .time {
        width: 24%;
    }

    .address {
        width: 44%;
    }

    .mobile {
        width: 41%;
    }

    .exam-date {
        width: 40%;
    }

    .exam-center {
        width: 46.8%;
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

    p {
        display: inline-block;
    }


    .logo {
        width: 200px;
        height: 200px;
    }

    @media print {
        p {
            display: inline-block;
        }

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
            width: 185px !important;
        }

        .school {
            width: 500px !important;
        }

        .roll {
            width: 100px !important;
        }

        .time {
            width: 130px !important;
        }

        .class-name {
            width: 80px !important;
        }

        .group {
            width: 80px !important;
        }

        .address {
            width: 200px !important;
        }

        .exam-center {
            width: 225px !important;
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
    }
</style>

<body>
    @foreach ($students as $student)
    <div style="break-after: always;">
        <div style="border: 10px solid black;background-color:#e0e0e0;" class="all-border">
            <header>
                <div style="display:flex;width:100%;" class="top-side">
                    <div class="top-component top-logo" style="margin-top:30px;">
                        <img src="{{ asset('upload/profile/'.$student['image']) }}" class="logo" alt="" srcset="" />
                    </div>
                    <div class="top-component" style="margin-top:-20px;">
                        <img class="card-img-top" style="width: 100px" src="{{ asset('assets/admit/logo.png') }}"
                            alt="Logo" />
                        <h3><b class="custom-font">দি স্টুডেন্ট ওয়েলফেয়ার এসোসিয়েশন সাভার</b></h3>
                        <h5 style="line-height:0" class="eng-text"><b>The Student Welfare Association Savar</b></h5>
                        <h5 style="line-height:0"><b class="custom-font">বৃত্তি পরীক্ষা ২০২৩ ইং</b></h5>
                        <h5 style="line-height:0"><b class="custom-font">রেজি নং - {{ $student['registration_no'] }}</b>
                        </h5>
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
                                    <p class="form-control input-sm office">{{ $student['roll_no'] }}</p>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="control-label" for="name">রেজিস্ট্রেশন নং:</label>
                                </div>
                                <div class="col-lg-5 space">
                                    <p class="form-control input-sm office">{{ $student['registration_no'] }}</p>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="control-label" for="name">অঞ্চল:</label>
                                </div>
                                <div class="col-lg-5 space">
                                    <p class="form-control input-sm office">{{ $student['area'] }}</p>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </div>
            </header>

            <div class="container-bottom" style="margin-top:50px !important;">

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">পরীক্ষার্থীর নাম</span>
                    <p class="form-control exam">{{ $student['name_bn'] }}</p>
                    <span class="input-group-text text-white bg-dark">পিতার নাম</span>
                    <p class="form-control father">{{ $student['father_name_bn'] }}</p>

                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">শিক্ষা প্রতিষ্ঠানের নাম</span>
                    <p class="form-control school">{{ $student['institute']['name'] }}</p>

                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">শ্রেণী</span>
                    <p class="form-control class-name">{{$student['student_class']['name'] }}</p>
                    <span class="input-group-text text-white bg-dark">রোল</span>
                    <p class="form-control roll">{{$student['roll_no'] }}</p>
                    <span class="input-group-text text-white bg-dark">বিভাগ</span>
                    <p class="form-control group">{{$student['class_section'] }}</p>
                    <span class="input-group-text text-white bg-dark">পরীক্ষার সময়</span>
                    <p class="form-control time">{{\Carbon\Carbon::parse($student['exam']['exam_time'])->format('g:i A')
                        }}</p>
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">বর্তমান ঠিকানা</span>
                    <p class="form-control address">{{$student['present_address'] }}</p>
                    <span class="input-group-text text-white bg-dark">মোবাইল</span>
                    <p class="form-control mobile">{{$student['mobile'] }}</p>
                </div>

                <div class="input-group md-3" style="border: solid black;">
                    <span class="input-group-text text-white bg-dark">পরীক্ষার তারিখ</span>
                    <p class="form-control exam-date">{{$student['exam']['exam_date'] }}</p>
                    <span class="input-group-text text-white bg-dark">কেন্দ্র</span>
                    <p class="form-control exam-center">{{$student['examCenter']['name'] }}</p>
                </div>

            </div>

        </div>
    </div>

    <div class="footer">
        <div style="float: right; padding:30px 0px; text-align:center;">
            <h4> <b class="custom-font">পরিচালক</b> </h4>
            <h4> <b class="custom-font">দি স্টুডেন্ট ওয়েলফেয়ার এসোসিয়েশন সাভার</b></h4>
        </div>
    </div>
    @endforeach
</body>
<script>
    window.print();
</script>

</html>