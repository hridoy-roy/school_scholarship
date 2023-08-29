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
                        <span class="label">School:</span>{{ $student['school_madrasa']}}
                    </div>
                    <div class="info-line">
                        <span class="label">Gender:</span>{{ $student['student_type'] }}
                    </div>
                </div>

                <!-- <div class="image-container">
          <img class="image" src="photo/Screenshot_20230622_175323_Gallery.jpg" alt="Student Image">
        </div> -->
            </div>

            <div class="section-two">
                <div class="section-two-title">Student Information</div>
                <div class="info-line">
                    <span class="label">Name(English):</span>{{ $student['name_en'] }}
                </div>
                <div class="info-line">
                    <span class="label">Area:</span>{{ $student['area']['name'] }}
                </div>
                <div class="info-line">
                    <span class="label">School Name:</span>{{ $student['institute']['name'] }}
                </div>
                <div class="info-line">
                    <span class="label">Class:</span>{{ $student['student_class']['name'] }}
                </div>
                <div class="info-line">
                    <span class="label">Class Roll:</span>{{ $student['class_roll'] }}
                </div>
                <div class="info-line">
                    <span class="label">Subject:</span>{{ $student['class_division'] }}
                </div>
                <div class="info-line">
                    <span class="label">Section:</span>{{ $student['class_section'] }}
                </div>
                <div class="info-line">
                    <span class="label">Date Of Birth:</span>{{ $student['dob'] }}
                </div>
                <div class="info-line">
                    <span class="label">Blood Group:</span>{{ $student['blood_group'] }}
                </div>

            </div>
            <div class="section-three">
                <div class="section-three-title">Parents Information</div>
                <div class="info-line">
                    <span class="label">Father's Name:</span>{{ $student['father_name_en'] }}
                </div>
                <div class="info-line">
                    <span class="label">Profession:</span>{{ $student['father_occupation'] }}
                </div>
                <div class="info-line">
                    <span class="label">Mother's Name:</span>{{ $student['mother_name_en'] }}
                </div>
                <div class="info-line">
                    <span class="label">Profession:</span>{{ $student['mother_occupation'] }}
                </div>
            </div>
            <div class="section-fourth">
                <div class="section-two-title">Present Address</div>
                <div class="info-line">
                    <span class="label">Home Address:</span>{{ $student['present_address'] }}
                </div>
            </div>

            <div class="section-fifth">
                <div class="section-fifth-title">Parmanent Address</div>
                <div class="info-line">
                    <span class="label">Division:</span>{{ $student['permanent_address_district'] }}
                </div>
                <div class="info-line">
                    <span class="label">Village Name:</span>{{ $student['permanent_address_village'] }}
                </div>
                <div class="info-line">
                    <span class="label">Thane:</span>{{ $student['permanent_address_thana'] }}
                </div>
                <div class="info-line">
                    <span class="label">Post Code:</span>{{ $student['permanent_address_post_office'] }}
                </div>
                <div class="info-line">
                    <span class="label">Home Address:</span>{{ $student['permanent_address'] }}
                </div>
                <div class="info-line">
                    <span class="label">Mobile Number:</span>{{ $student['mobile'] }}
                </div>
                <div class="info-line">
                    <span class="label">Email Address:</span>{{ $student['email'] }}
                </div>
                <div class="info-line">
                    <span class="label">Facebook:</span>{{ $student['facebook'] }}
                </div>
            </div>
            <div class="section-sixth">
                <div class="section-sixth-title">Absence Of Guardian Information</div>
                <div class="info-line">
                    <span class="label">Name Of Guardian:</span>{{ $student['absent_of_parent_name'] }}
                </div>
                <div class="info-line">
                    <span class="label">Relationship:</span>{{ $student['absent_of_parent_relation'] }}
                </div>
                <div class="info-line">
                    <span class="label">Occupation:</span>{{ $student['absent_of_parent_occupation'] }}
                </div>
                <div class="info-line">
                    <span class="label">Income:</span>{{ $student['absent_of_parent_annual_earning'] }}
                </div>
            </div>

        </div>


    </div>
</body>

</html>
