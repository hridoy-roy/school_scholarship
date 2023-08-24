<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .pdf-page {
            width: 8.5in;
            /* height: 11in; */
            margin: 0 auto;
            border: 1px solid #000;
            background-color: #fff;
            padding: 1rem;
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;

        }

        .section {
            padding: 0 1in 1in 1in;
        }

        .section-one {
            /* display: flex; */
            /* height: 200px; */
            margin-bottom: 1rem;

        }

        .section-one-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .section-two {
            margin-bottom: 1rem;
        }

        .section-two-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .section-three {
            margin-bottom: 1rem;
        }

        .section-three-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .section-fourth {
            margin-bottom: 1rem;
        }

        .section-fourth-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .section-fifth {
            margin-bottom: 1rem;
        }

        .section-fifth-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .section-sixth {
            margin-bottom: 1rem;
        }

        .section-sixth-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .info-line {
            margin-bottom: 5px;
        }

        .label {
            font-weight: bold;
        }

        .image-container {
            float: right;
            display: block;
            width: 200px;
            height: 200px;
            margin-left: 20px;
        }

        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="pdf-page">
        <div class="header">
            Registration Form
        </div>
        <div class="image-container">
            <img class="image" src="photo/Screenshot_20230622_175323_Gallery.jpg" alt="Student Image">
        </div>
        <div class="section">
            <div class="section-one">
                <div class="section-one-info">

                    <div class="info-line">
                        <span class="label">School:</span>{{ $student['institute']['name'] }}
                    </div>
                    <div class="info-line">
                        <span class="label">Gender:</span>{{ $student['name_bn'] }} Male
                    </div>
                </div>

                <!-- <div class="image-container">
          <img class="image" src="photo/Screenshot_20230622_175323_Gallery.jpg" alt="Student Image">
        </div> -->
            </div>

            <div class="section-two">
                <div class="section-two-title">Student Information</div>
                <div class="info-line">
                    <span class="label">Name(English):</span>{{ $student['name_bn'] }} Mohammad Asif Uddin
                </div>
                <div class="info-line">
                    <span class="label">Area:</span>{{ $student['name_bn'] }} Chittagong
                </div>
                <div class="info-line">
                    <span class="label">School Name:</span>{{ $student['name_bn'] }} Chittagong Govt. High School
                </div>
                <div class="info-line">
                    <span class="label">Class:</span>{{ $student['name_bn'] }} Eight
                </div>
                <div class="info-line">
                    <span class="label">Class Roll:</span>{{ $student['name_bn'] }} 12
                </div>
                <div class="info-line">
                    <span class="label">Section:</span>{{ $student['name_bn'] }} Meghna
                </div>
                <div class="info-line">
                    <span class="label">Date Of Birth:</span>{{ $student['name_bn'] }} 01/01/2010
                </div>
                <div class="info-line">
                    <span class="label">Blood Group:</span>{{ $student['name_bn'] }} AB+
                </div>

            </div>
            <div class="section-three">
                <div class="section-three-title">Parents Information</div>
                <div class="info-line">
                    <span class="label">Father's Name:</span>{{ $student['name_bn'] }} Moinuddin Hamid
                </div>
                <div class="info-line">
                    <span class="label">Profession:</span>{{ $student['name_bn'] }} Businessman
                </div>
                <div class="info-line">
                    <span class="label">Mother's Name:</span>{{ $student['name_bn'] }} Halima Begum
                </div>
                <div class="info-line">
                    <span class="label">Profession:</span>{{ $student['name_bn'] }} Housewife
                </div>
            </div>
            <div class="section-fourth">
                <div class="section-two-title">Present Address</div>
                <div class="info-line">
                    <span class="label">Home Address:</span>{{ $student['name_bn'] }} GEC, Naziabad, Chittagong
                </div>
            </div>

            <div class="section-fifth">
                <div class="section-fifth-title">Parmanent Address</div>
                <div class="info-line">
                    <span class="label">Division:</span>{{ $student['name_bn'] }} Chittagong
                </div>
                <div class="info-line">
                    <span class="label">Village Name:</span>{{ $student['name_bn'] }} Chittagong
                </div>
                <div class="info-line">
                    <span class="label">Thane:</span>{{ $student['name_bn'] }} Chittagong
                </div>
                <div class="info-line">
                    <span class="label">Post Code:</span>{{ $student['name_bn'] }} 4225
                </div>
                <div class="info-line">
                    <span class="label">Home Address:</span>{{ $student['name_bn'] }} GEC, Naziabad, Chittagong
                </div>
                <div class="info-line">
                    <span class="label">Mobile Number:</span>{{ $student['name_bn'] }} +8801340282233
                </div>
                <div class="info-line">
                    <span class="label">Email Address:</span>{{ $student['name_bn'] }} xyab@gmail.com
                </div>
                <div class="info-line">
                    <span class="label">Facebook:</span>{{ $student['name_bn'] }} Mohammad Asif Uddin
                </div>
            </div>
            <div class="section-sixth">
                <div class="section-sixth-title">Absence Of Guardian Information</div>
                <div class="info-line">
                    <span class="label">Name Of Guardian:</span>{{ $student['name_bn'] }} Moinuddin Hamid
                </div>
                <div class="info-line">
                    <span class="label">Relationship:</span>{{ $student['name_bn'] }} Father
                </div>
                <div class="info-line">
                    <span class="label">Occupation:</span>{{ $student['name_bn'] }} Businessman
                </div>
                <div class="info-line">
                    <span class="label">Income:</span>{{ $student['name_bn'] }} 300000
                </div>
            </div>

        </div>


    </div>
</body>

</html>
