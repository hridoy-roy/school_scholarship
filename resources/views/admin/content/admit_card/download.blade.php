<!doctype html>
@foreach ($students as $student)
<html lang="en" style="break-before: always;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>admit Card</title>


    <style>
        .txt-center {
            text-align: center;
        }

        .border- {
            border: 1px solid #000 !important;
        }

        .padding {}

        .mar-bot {
            margin-bottom: 15px;
        }

        .admit-card {
            border: 2px solid #000;

        }

        .BoxA h5,
        .BoxA p {
            margin: 0;
        }

        h5 {
            text-transform: uppercase;
        }

        table img {
            width: 100%;
            margin: 0 auto;
        }

        .table-bordered td,
        .table-bordered th,
        .table thead th {
            border: 1px solid #000000 !important;
        }
    </style>
</head>

<body>
    <section>
        <div class="">
            <div class="admit-card">
                <div class="BoxA border- padding mar-bot">
                    <div class="row">
                        <div class="col-sm-4">
                            <h5>MEWAR UNIVERSITY</h5>
                            <p>NH - 79 Gangrar Chittorgarh - 312901 <br> RAJASTHAN, INDIA</p>
                        </div>
                        <div class="col-sm-4 txt-center">
                        </div>
                        <div class="col-sm-4">
                            <h5>Admit Card</h5>
                            <p>B.Tech - 2019</p>
                        </div>
                    </div>
                </div>
                <div class="BoxC border- padding mar-bot">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Enrollment No : 9910101</h5>
                        </div>
                    </div>
                </div>
                <div class="BoxD border- padding mar-bot">
                    <div class="row">
                        <div class="col-sm-10">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><b>ENROLLMENT NO : 9910101</b></td>
                                        <td><b>Course: </b> B.TECH</td>
                                    </tr>
                                    <tr>
                                        <td><b>Student Name: </b>{{ $student['registration_no'] }}</td>
                                        <td><b>Sex: </b>M</td>
                                    </tr>
                                    <tr>
                                        <td><b>Father/Husband Name: </b>SS Sharma</td>
                                        <td><b>DOB: </b>02 Jul 2019</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="    height: 125px;"><b>Address: </b>moh hasnxgxums , moh
                                            hasnxgxums, moh hasnxgxums</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="BoxE border- padding mar-bot txt-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>EXAMINATION VENUE</h5>
                            <p>NH - 79 Gangrar Chittorgarh - 312901 <br> RAJASTHAN, INDIA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
@endforeach