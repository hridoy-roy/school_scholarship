<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
		integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<style>
		.pdf-page {
			width: 7.9in;
			height: 11in;
			margin: 0 auto;
			border: 1px solid #000;
			background-color: #fff;
			padding: .3rem;
			box-sizing: border-box;
		}

		.header {
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			margin: 2px 0;
		}

		.section {
			padding: 0 1in 0in 1in;
		}

		.section-one {
			/* display: flex; */
			/* height: 200px; */
			margin-bottom: 1rem;
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
			width: 200px;
			height: 200px;
			object-fit: cover;
			border-radius: 50%;
		}

		.glow-text:hover {
			text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
			/* Add a white glow effect */
			color: #ff6600;
			/* Change text color on hover */
		}
	</style>
</head>

<body id="downloadContent">
	<div class="pdf-page">
		<h5 class="header" style="color: #01224E">The Student
			Welfare Association Savar</h5>
		<div class="header">
			Registration Form Print Copy
		</div>
		<div class="section">
			<div class="section-one">
				<div class="section-one-info">

					<div class="info-line">
						<span class="label">Name(En):</span>
						<mark>{{ $student['name_en'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Name(Bn):</span>
						<mark>{{ $student['name_bn'] }}</mark>
					</div>
					<div class="info-line">
						<strong><span class="label">Registration No:
							</span>
							<mark>{{ $student['registration_no'] }}</mark>
						</strong>
					</div>
				</div>

				<div class="image-container">
					<img class="image" src="{{ asset('upload/profile/' . $student['image']) }}" alt="Student Image">
				</div>
			</div>

			<div class="section-two">
				<div class="section-two-title">Student Information</div>
				<div class="info-line">
					<span class="label">School/Madrasha:</span>
					<mark>{{ $student['school_madrasa'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">Gender:</span>
					<mark>{{ $student['student_type'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">Area:</span>
					<mark>{{ $student['area']['name'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">School Name:</span>
					<mark>{{ $student['institute']['name'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">Class:</span>
					<mark>{{ $student['student_class']['name'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">Class Roll:</span>
					<mark>{{ $student['class_roll'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">Subject:</span>
					<mark>{{ $student['class_division'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">Section:</span>
					<mark>{{ $student['class_section'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">Date Of Birth:</span>
					<mark>{{ $student['dob'] }}</mark>
				</div>
				<div class="info-line">
					<span class="label">Blood Group:</span>
					<mark>{{ $student['blood_group'] }}</mark>
				</div>

			</div>
			<div style="display: flex;justify-content: space-between;">
				<div class="section-three">
					<div class="section-three-title">Parents Information</div>
					<div class="info-line">
						<span class="label">Father's Name:</span>
						<mark>{{ $student['father_name_en'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Profession:</span>
						<mark>{{ $student['father_occupation'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Mother's Name:</span>
						<mark>{{ $student['mother_name_en'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Profession:</span>
						<mark>{{ $student['mother_occupation'] }}</mark>
					</div>
				</div>
				<div class="section-fourth">
					<div class="section-two-title">Present Address</div>
					<div class="info-line">
						<span class="label">Home Address:</span>
						<mark>{{ $student['present_address'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Division:</span>
						<mark>{{ $student['present_address_district'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Village Name:</span>
						<mark>{{ $student['present_address_village'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Thane:</span>
						<mark>{{ $student['present_address_thana'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Post Code:</span>
						<mark>{{ $student['present_address_post_office'] }}</mark>
					</div>
				</div>
			</div>
			<div style="display: flex;justify-content: space-between;">
				<div class="section-fifth">
					<div class="section-fifth-title">Parmanent Address</div>
					<div class="info-line">
						<span class="label">Division:</span>
						<mark>{{ $student['permanent_address_district'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Village Name:</span>
						<mark>{{ $student['permanent_address_village'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Thane:</span>
						<mark>{{ $student['permanent_address_thana'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Post Code:</span>
						<mark>{{ $student['permanent_address_post_office'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Home Address:</span>
						<mark>{{ $student['permanent_address'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Mobile Number:</span>
						<mark>{{ $student['mobile'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Email Address:</span>
						<mark>{{ $student['email'] }}</mark>
					</div>
				</div>
				<div class="section-sixth">
					<div class="section-sixth-title">Absence Of Guardian Information</div>
					<div class="info-line">
						<span class="label">Name Of Guardian:</span>
						<mark>{{ $student['absent_of_parent_name'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Relationship:</span>
						<mark>{{ $student['absent_of_parent_relation'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Occupation:</span>
						<mark>{{ $student['absent_of_parent_occupation'] }}</mark>
					</div>
					<div class="info-line">
						<span class="label">Income:</span>
						<mark>{{ $student['absent_of_parent_annual_earning'] }}</mark>
					</div>
				</div>
			</div>

		</div>

		<p>For Contact:<span class="glow-text">+016xxxxxxxx</span></p>
		<p>For Payment in bKash:<span class="glow-text">+016xxxxxxxx</span></p>
		<p>For Payment in Nagad:<span class="glow-text">+016xxxxxxxx</span></p>

	</div>
	{{-- <script>
		window.onload = function() {
			const downloadContent = this.document.getElementById('downloadContent');
			html2pdf().from(downloadContent).save('student_info').then(() => {
				location.replace('/students/create/');
			});
		}
	</script> --}}
</body>

</html>
