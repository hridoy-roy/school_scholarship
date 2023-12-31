@php use Carbon\Carbon; @endphp
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admit Card</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
            integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
    .pdf-page {
        width: 7.9in;
        margin: 0 auto;
        background-color: #fff;
        box-sizing: border-box;
    }

    .input-group {
        padding: 5px;
    }

    .form-control1 {
        text-align: center
    }

    .top-component {
        margin-left: 5px;
        margin-right: 5px;
    }

    .all-border {
        padding: 10px 10px 10px 10px;
    }

    .student {
        width: 40%;
    }

    .footer {
        margin-right: 50px !important;
        font-weight: bold;
    }

    .eng-text {
        font-family: "Times New Roman", Times, serif;
        font-size: 15px;
    }

    .logo {
        width: 180px;
        height: 180px;
        border-radius: 50%;
    }

    .mb-3 {
        margin-bottom: 3px;
    }


</style>

<body class="pdf-page">
@foreach ($students as $student)
    <div id="downloadContent">
        <div style="border: 10px solid black;background-color:#e0e0e0;" class="all-border">
            <div>
                <div style="display:flex;width:100%;" class="top-side">
                    <div class="top-component top-logo" style="margin-top:30px;">
                        <img src="{{ asset('upload/profile/' . $student['image']) }}" class="logo" alt="" srcset=""/>
                    </div>
                    <div class="top-component" style="text-align: center;">
                        <img class="card-img-top" style="width: 100px" src="{{ asset('assets/admit/logo.png') }}"
                             alt="Picture"/>
                        <h3 style="margin: 1px;"><b>The Student Welfare Association Savar</b></h3>
                        <h4 style="line-height:20px; margin: 1px;" class="eng-text"><b>The Student Welfare Association
                                Savar</b></h4>
                        <h5 style="line-height:30px; margin: 1px;"><b>Scholarship Exam Date 2023</b></h5>
                        <h5><b>Reg. No. {{$student['registration_no']}}</b></h5>
                    </div>
                    <div class="top-component top-office" style="margin-top:20px;">
                        <fieldset class="group-border" style="padding: 10px">
                            <legend class="group-border" style="text-align: center; margin-bottom:10px">Fill By The
                                Office
                            </legend>

                            <div class="row">

                                <div class="col-lg-6">
                                    <label class="control-label" for="name">Scholarship Candidate Roll:</label>
                                </div>

                                <div class="col-lg-5 space">
                                    <input class="form-control1 input-sm office" disabled="disabled" id="title1"
                                           name="title1" value="{{ $student['roll_no'] }}" type="text">
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="control-label" for="name">Registration No :</label>
                                </div>
                                <div class="col-lg-5 space">
                                    <input class="form-control1 input-sm office" disabled="disabled" id="title2"
                                           name="title2" value="{{ $student['registration_no'] }}" type="text">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="control-label" for="name">Rigion :</label>
                                </div>
                                <div class="col-lg-5 space">
                                    <input class="form-control1 input-sm office" disabled="disabled" id="title3"
                                           name="title3" value="{{ $student['area']['name'] }}" type="text">
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </div>

            </div>

            <div class="container-bottom" style="margin-top:10px !important;">

                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark student">Student Name : </span>
                    <input type="text" disabled class="form-control exam" placeholder=""
                           value="{{ $student['name_bn'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                    <span class="input-group-text text-white bg-dark">Father Name :</span>
                    <input type="text" disabled class="form-control father" placeholder=""
                           value="{{ $student['father_name_bn'] }}" style=" border-width : 0;background-color:#e0e0e0;">

                </div>

                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark">School Name : </span>
                    <input type="text" disabled class="form-control school" placeholder=""
                           value="{{ $student['institute']['name'] }}"
                           style=" border-width : 0;background-color:#e0e0e0;">
                    <span class="input-group-text text-white bg-dark">Class : </span>
                    <input type="text" disabled class="form-control class-name" placeholder=""
                           value="{{ $student['student_class']['name'] }}"
                           style=" border-width : 0;background-color:#e0e0e0;">
                </div>

                <div class="input-group mb-3" style="border:1px solid black;">

                    <span class="input-group-text text-white bg-dark">Roll : </span>
                    <input type="text" disabled class="form-control roll" placeholder=""
                           value="{{ $student['roll_no'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                    <span class="input-group-text text-white bg-dark">Division: </span>
                    <input type="text" disabled class="form-control group" placeholder=""
                           value="{{ $student['class_section'] }}" style=" border-width : 0;background-color:#e0e0e0;">

                </div>

                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark">Present Address : </span>
                    <input type="text" disabled class="form-control address" placeholder=""
                           value="{{ $student['present_address'] }}"
                           style=" border-width : 0;background-color:#e0e0e0;">
                    <span class="input-group-text text-white bg-dark">Mobile : </span>
                    <input type="text" disabled class="form-control mobile" placeholder=""
                           value="{{ $student['mobile'] }}" style=" border-width : 0;background-color:#e0e0e0;">
                </div>

                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark">Exam Time : </span>
                    <input type="text" disabled class="form-control time"
                           style=" border-width : 0;background-color:#e0e0e0;" placeholder=""
                           value="{{ Carbon::parse($student['exam']['exam_time'])->format('g:i A') }}">
                    <span class="input-group-text text-white bg-dark">Exam Date : </span>
                    <input type="text" disabled class="form-control exam-date" placeholder=""
                           value="{{ $student['present_address'] }}"
                           style=" border-width : 0;background-color:#e0e0e0;">
                </div>
                <div class="input-group mb-3" style="border:1px solid black;">
                    <span class="input-group-text text-white bg-dark">Center : </span>
                    <input type="text" disabled class="form-control exam-center" placeholder=""
                           value="{{ $student['examCenter']['name'] }}"
                           style=" border-width : 0;background-color:#e0e0e0;">
                </div>

            </div>

        </div>
    </div>

    <div class="footer">

        <div style="float: right; padding:0px 0px; text-align:center;">
            <h4><b>Director</b></h4>
            <h4><b>The Student welfare association Savar</b></h4>
        </div>
    </div>
@endforeach


</body>
<script>
    window.onload = function () {
        const downloadContent = this.document.getElementById('downloadContent');
        html2pdf().from(downloadContent).save('student_admit_cards');
    }
</script>

</html>
