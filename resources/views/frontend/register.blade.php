<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
			integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
			crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
		<title>Document</title>
		<style>
			* {
				font-family: "Poppins", sans-serif;
			}

			body {
				background-image: linear-gradient(to left bottom,
						#051937,
						#05162f,
						#051327,
						#040f1f,
						#010a18);
				background-size: 800%;
				animation: animateClr 1s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
			}

			input[type="text"],
			input[type="email"],
			input[type="tel"],
			textarea {
				border: none;
				border-bottom: 2px solid rgb(128, 126, 126);
				background: transparent;
				outline: none;
				width: 100%;
				text-transform: capitalize;
				padding: 1rem 0.4rem;
			}

			.aside {
				background-image: linear-gradient(to left bottom,
						#051937,
						#002350,
						#002d69,
						#003684,
						#01409f);
				animation: animateClr 5s infinite cubic-bezier(0.62, 0.28, 0.23, 0.99);
				background-size: 400%;
			}

			@keyframes animateClr {
				0% {
					background-position: 0% 50%;
				}

				50% {
					background-position: 100% 50%;
				}

				100% {
					background-position: 0% 50%;
				}
			}

			ion-icon:not([name="logo-codepen"]) {
				border: 1px solid currentColor;
				border-radius: 20%;
				padding: 1rem;
			}

			/*    Pic*/
			.avatar-upload {
				position: relative;
				max-width: 205px;
				/*margin: 50px auto;*/
			}

			.avatar-upload .avatar-edit {
				position: absolute;
				right: 12px;
				z-index: 1;
				top: 10px;
			}

			.avatar-upload .avatar-edit input {
				display: none;
			}

			.avatar-upload .avatar-edit input+label {
				display: inline-block;
				width: 34px;
				height: 34px;
				margin-bottom: 0;
				border-radius: 100%;
				background: #FFFFFF;
				border: 1px solid transparent;
				box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
				cursor: pointer;
				font-weight: normal;
				transition: all 0.2s ease-in-out;
			}

			.avatar-upload .avatar-edit input+label:hover {
				background: #f1f1f1;
				border-color: #d6d6d6;
			}

			.avatar-upload .avatar-edit input+label:after {
				content: "\f040";
				font-family: 'FontAwesome';
				color: #757575;
				position: absolute;
				top: 10px;
				left: 0;
				right: 0;
				text-align: center;
				margin: auto;
			}

			.avatar-upload .avatar-preview {
				width: 192px;
				height: 192px;
				position: relative;
				border-radius: 100%;
				border: 6px solid #F8F8F8;
				box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
			}

			.avatar-upload .avatar-preview>div {
				width: 100%;
				height: 100%;
				border-radius: 100%;
				background-size: cover;
				background-repeat: no-repeat;
				background-position: center;
			}

			/*    Button */
			.margin-bottom-40 {
				margin-bottom: 40px;
				margin-top: 40px;
			}

			/* Button Sizes*/
			.btn-mod.btn-large {
				height: auto;
				padding: 13px 52px;
				font-size: 15px;
			}

			.btn-mod.btn-medium {
				height: auto;
				padding: 10px 35px;
				font-size: 13px;
			}

			.btn-mod.btn-small {
				height: auto;
				padding: 6px 16px;
				font-size: 12px;
			}

			/* Button Mod to the original Bootstrap Buttons */
			.btn-mod.btn-circle {
				-webkit-border-radius: 30px;
				-moz-border-radius: 30px;
				border-radius: 30px;
			}

			.btn-mod.btn-border {
				color: #fff;
				border: 2px solid #fff;
				background: transparent;
			}

			.btn-mod,
			a.btn-mod {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				padding: 4px 13px;
				color: #fff;
				background: rgba(34, 34, 34, .9);
				border: 2px solid transparent;
				font-size: 11px;
				font-weight: 400;
				text-transform: uppercase;
				text-decoration: none;
				letter-spacing: 2px;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				border-radius: 0;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none;
				-webkit-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
				-moz-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
				-o-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
				-ms-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
				transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
			}

			.btn-mod.btn-border:hover,
			.btn-mod.btn-border:focus {
				color: #000;
				border-color: transparent;
				background: #fff;
			}

			.btn-mod:hover,
			.btn-mod:focus,
			a.btn-mod:hover,
			a.btn-mod:focus {
				font-weight: 400;
				color: rgba(255, 255, 255, .85);
				background: rgba(0, 0, 0, .7);
				text-decoration: none;
				outline: none;
				border-color: transparent;
				-webkit-box-shadow: none;
				box-shadow: none;
			}

			/*    Button */
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row text-center">
				@foreach ($menus as $menu)
					<div class="col-md-2 col-sm-4 margin-bottom-40">
						<a href="{{ $menu->link }}" class="btn btn-mod btn-border btn-circle btn-large">
							{{ $menu->name }}
						</a>
					</div>
				@endforeach
			</div>
			<div class="bg-light">
				<div class="row">
					<div class="col-lg-8 col-md-12 p-5 bg-white rounded-3">

						{{-- ----------- Error Show ----------- --}}
						@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						<form class="row mb-3" action="{{ route('students.store') }}" class="form" method="POST"
							enctype="multipart/form-data">
							@csrf
							<div class="d-flex mb-3 flex-column">
								<h5 class="h5 text-center mb-3 text-decoration-underline" style="color: #01224E">The Student Welfare Association Savar</h5>
								<h1 class="h1 text-center mb-5 " style="color: #01224E">Student Registration Form </h1>
								<div class="d-flex justify-content-center">

									{{-- ----------- Image Upload ----------- --}}
									<div class="mb-3 text-center">
										<label class="form-label"><strong>Upload Image</strong></label>
										<div class="avatar-upload">
											<div class="avatar-edit">
												<input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
												<label for="imageUpload"></label>
											</div>
											<div class="avatar-preview">
												<div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=2');">
												</div>
											</div>
										</div>
										@error('image')
											<div class="invalid-feedback">{{ $message }}</div>
										@enderror
									</div>

								</div>
							</div>

							<h3 class="h3 text-center text-decoration-underline"  style="color: #01224E">Student Information</h3>

							{{-- ----------- School or Madrasha ----------- --}}
							<div class="col-md-6 p-3">
								<label class="form-label"><strong>School or Madrasha</strong></label>
								<div class="form-check">
									<input type="radio" class="form-check-input" name="school_madrasa" id="school" value="school"
										@if (@$student['school_madrasa'] == 'school') checked @endif {{ old('school_madrasa') == 'school' ? 'checked' : '' }}>
									<label class="form-check-label" for="school">School</label>
								</div>
								<div class="form-check">
									<input type="radio" class="form-check-input" name="school_madrasa" id="madrasha" value="madrasha"
										@if (@$student['school_madrasa'] == 'madrasha') checked @endif {{ old('school_madrasa') == 'madrasha' ? 'checked' : '' }}>
									<label class="form-check-label" for="madrasha">Madrasha</label>
								</div>
								@error('school_madrasa')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Male or Female ----------- --}}
							<div class="col-md-6 p-3">
								<label class="form-label"><strong>Male OR Female <span>*</span></strong></label>
								<div class="form-check">
									<input type="radio" class="form-check-input" name="student_type" id="male" value="male"
										@if (@$student['student_type'] == 'male') checked @endif
										{{ old('student_type') == 'male' ? 'checked' : '' }}>
									<label class="form-check-label" for="male">Male</label>
								</div>
								<div class="form-check">
									<input type="radio" class="form-check-input" name="student_type" id="female" value="female"
										@if (@$student['student_type'] == 'female') checked @endif {{ old('student_type') == 'female' ? 'checked' : '' }}>
									<label class="form-check-label" for="female">Female</label>
								</div>
								@error('student_type')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Student Name (English) ----------- --}}
							<div class="col-md-6 p-3">
								<label for="name_en" class="form-label"><strong>Name <code>*(English)</code></strong></label>
								<input type="text" class="form-control @error('name_en') is-invalid @enderror" name="{{ 'name_en' }}"
									id="name_en" value="{{ @$student['name_en'] ?? old('name_en') }}" placeholder="Name" />
								@error('name_en')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Student Name (Bangla) ----------- --}}
							<div class="col-md-6 p-3">
								<label for="name_bn" class="form-label"><strong>Name <code>*(বাংলা)</code></strong></label>
								<input type="text" class="form-control @error('name_bn') is-invalid @enderror" name="{{ 'name_bn' }}"
									id="name_bn" value="{{ @$student['name_bn'] ?? old('name_bn') }}" placeholder="নাম" />
								@error('name_bn')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Area ----------- --}}
							<div class="col-md-6 p-3">
								<label for="area" class="form-label"><strong>Area <code>*</code></strong></label>
								<select class="form-select @error('area_id') is-invalid @enderror" required name="area_id" id="institute_id">
									<option>Select Your Area Name</option>
									@foreach ($areas as $area)
										<option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>
											{{ $area->name }}</option>
									@endforeach
								</select>
								@error('area_id')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- School ----------- --}}
							<div class="col-md-6 p-3">
								<label for="institute_id" class="form-label"><strong>School <code>*</code></strong></label>
								<select class="form-select @error('institute_id') is-invalid @enderror" required name="institute_id"
									id="institute_id">
									<option>Select Your School Name</option>
									@foreach ($institutes as $institute)
										<option value="{{ $institute->id }}" {{ old('institute_id') == $institute->id ? 'selected' : '' }}>
											{{ $institute->name }}</option>
									@endforeach
								</select>
								@error('institute_id')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Class ----------- --}}
							<div class="col-md-6 p-3">
								<label for="class" class="form-label"><strong>Class<code>*</code></strong></label>
								<select class="form-select @error('student_class_id') is-invalid @enderror" required name="student_class_id"
									id="student_class_id">
									<option>Select Class Name</option>
									@foreach ($student_classes as $student_class)
										<option value="{{ $student_class->id }}"
											{{ old('student_class_id') == $student_class->id ? 'selected' : '' }}>{{ $student_class->name }}</option>
									@endforeach
								</select>
								@error('student_class_id')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Class Roll ----------- --}}
							<div class="col-md-6 p-3">
								<label for="class_roll" class="form-label"><strong>Class Roll<code>*</code></strong></label>
								<input type="number" class="form-control @error('class_roll') is-invalid @enderror"
									name="{{ 'class_roll' }}" id="class_roll" value="{{ @$student['class_roll'] ?? old('class_roll') }}"
									placeholder="Roll" />
								@error('class_roll')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Subject ----------- --}}
							<div class="col-md-6 p-3">
								<label class="form-label" for="class_division"><strong>Subject</strong></label>
								<select class="form-select" name="class_division" id="class_division">
									<option value=" ">Select Your Subject</option>
									<option value="Science" {{ old('class_division') === 'Science' ? 'selected' : '' }}>Science
									</option>
									<option value="Commerce" {{ old('class_division') === 'Commerce' ? 'selected' : '' }}>Commerce
									</option>
									<option value="Arts" {{ old('class_division') === 'Arts' ? 'selected' : '' }}>Arts
									</option>
									<option value="Others" {{ old('class_division') === 'Others' ? 'selected' : '' }}>Others
									</option>
								</select>
								@error('class_division')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Section ----------- --}}
							<div class="col-md-6 p-3">
								<label for="class_section" class="form-label"><strong>Section</strong></label>
								<input type="text" class="form-control @error('class_section') is-invalid @enderror"
									name="{{ 'class_section' }}" id="class_section"
									value="{{ @$student['class_section'] ?? old('class_section') }}" placeholder="Section" />
								@error('class_section')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Date of Birth ----------- --}}
							<div class="col-md-6 p-3">
								<div class="form-floating input-group mb-4">
                                    <label for="class_section" class="form-label"><strong><code>Date of Birth</code></strong></label>
									<input type="text" id="datepicker2"
										class="datepicker_input form-control  @error('dob') is-invalid @enderror" placeholder="DD/MM/YYYY"
										name="{{ 'dob' }}" value="{{ @$student['dob'] ?? old('dob') }}">
									<i class="bi bi-calendar-date input-group-text"></i>
								</div>
								@error('dob')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Blood Group ----------- --}}
							<div class="col-md-6 p-3">
								<label for="blood_group" class="form-label"><strong>Blood Group <code>*</code> </strong></label>
								<select class="form-select" name="blood_group" id="blood_group">
									<option>Select Your Blood Group</option>
									<option value="A+" {{ old('blood_group') === 'A+' ? 'selected' : '' }}>A+
									</option>
									<option value="B+" {{ old('blood_group') === 'B+' ? 'selected' : '' }}>B+
									</option>
									<option value="O+" {{ old('blood_group') === 'O+' ? 'selected' : '' }}>O+
									</option>
									<option value="AB+" {{ old('blood_group') === 'AB+' ? 'selected' : '' }}>AB+
									</option>
									<option value="A-" {{ old('blood_group') === 'A-' ? 'selected' : '' }}>A-
									</option>
									<option value="B-" {{ old('blood_group') === 'B-' ? 'selected' : '' }}>B-
									</option>
									<option value="O-" {{ old('blood_group') === 'O-' ? 'selected' : '' }}>O-
									</option>
									<option value="AB-" {{ old('blood_group') === 'AB-' ? 'selected' : '' }}>AB-
									</option>
								</select>
								@error('blood_group')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>
							<h3 class="h3 text-center text-decoration-underline"  style="color: #01224E">Parents Information</h3>

							{{-- ----------- Father Name (English) ----------- --}}
							<div class="col-md-6 p-3">
								<label for="father_name_en" class="form-label"><strong>Father Name <code>*(English)</code></strong></label>
								<input type="text" class="form-control @error('father_name_en') is-invalid @enderror"
									name="{{ 'father_name_en' }}" id="father_name_en"
									value="{{ @$student['father_name_en'] ?? old('father_name_en') }}" placeholder="Father Name" />
								@error('father_name_en')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Father Name (Bangla) ----------- --}}
							<div class="col-md-6 p-3">
								<label for="father_name_bn" class="form-label"><strong>Father Name <code>*(বাংলা)</code></strong></label>
								<input type="text" class="form-control @error('father_name_bn') is-invalid @enderror"
									name="{{ 'father_name_bn' }}" id="father_name_bn"
									value="{{ @$student['father_name_bn'] ?? old('father_name_bn') }}" placeholder="বাবার নাম" />
								@error('father_name_bn')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Father Occupation ----------- --}}
							<div class="col-md-6 p-3">
								<label for="father_occupation" class="form-label"><strong>Profession</strong></label>
								<input type="text" class="form-control @error('father_occupation') is-invalid @enderror"
									name="{{ 'father_occupation' }}" id="father_occupation"
									value="{{ @$student['father_occupation'] ?? old('father_occupation') }}" placeholder="Profession" />
								@error('father_occupation')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Mobile Number ----------- --}}
							<div class="col-md-6 p-3">
								<label for="mobile" class="form-label"><strong>Mobile Number <code>*</code></strong></label>
								<input type="text" class="form-control @error('mobile') is-invalid @enderror" name="{{ 'mobile' }}"
									id="mobile" value="{{ @$student['mobile'] ?? old('mobile') }}" placeholder="Mobile">
								@error('mobile')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Mother Name (English) ----------- --}}
							<div class="col-md-6 p-3">
								<label for="mother_name_en" class="form-label"><strong>Mother Name <code>*(English)</code></strong></label>
								<input type="text" class="form-control @error('mother_name_en') is-invalid @enderror"
									name="{{ 'mother_name_en' }}" id="mother_name_en"
									value="{{ @$student['mother_name_en'] ?? old('mother_name_en') }}" placeholder="Mother Name" />
								@error('mother_name_en')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Mother Name (Bangla) ----------- --}}
							<div class="col-md-6 p-3">
								<label class="form-label"><strong>Mother Name <code>* (বাংলা)</code></strong></label>
								<input type="text" class="form-control @error('mother_name_bn') is-invalid @enderror"
									name="{{ 'mother_name_bn' }}" id="mother_name_bn"
									value="{{ @$student['mother_name_bn'] ?? old('mother_name_bn') }}" placeholder="মায়ের নাম" />
								@error('mother_name_bn')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Mother Name Profession ----------- --}}
							<div class="col-md-6 p-3">
								<label for="mother_occupation" class="form-label"><strong>Profession</strong></label>
								<input type="text" class="form-control @error('mother_occupation') is-invalid @enderror"
									name="{{ 'mother_occupation' }}" id="mother_occupation"
									value="{{ @$student['mother_occupation'] ?? old('mother_occupation') }}" placeholder="Profession" />
								@error('mother_occupation')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Email ----------- --}}
							<div for="email" class="col-md-6 p-3">
								<label class="form-label"><strong>Email </strong></label>
								<input type="text" class="form-control @error('email') is-invalid @enderror" name="{{ 'email' }}"
									id="email" value="{{ @$student['email'] ?? old('email') }}" placeholder="Email" />
								@error('email')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Present Address ----------- --}}
							<h3 class="h3 text-center text-decoration-underline"  style="color: #01224E">Present Address</h3>
							<div class="col-md-6 p-3">
								<label for="present_address_district" class="form-label"><strong>District Name <code>*</code></strong></label>
								<input type="text" class="form-control @error('present_address_district') is-invalid @enderror"
									name="{{ 'present_address_district' }}" id="present_address_district"
									value="{{ @$student['present_address_district'] ?? old('present_address_district') }}"
									placeholder="District Name" />
								@error('present_address_district')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label for="present_address_village" class="form-label"><strong>Village Name <code>*</code></strong></label>
								<input type="text" class="form-control @error('present_address_village') is-invalid @enderror"
									name="{{ 'present_address_village' }}" id="present_address_village"
									value="{{ @$student['present_address_village'] ?? old('present_address_village') }}"
									placeholder="Village Name" />
								@error('present_address_village')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label for="present_address_thana" class="form-label"><strong>Thana <code>*</code></strong></label>
								<input type="text" class="form-control @error('present_address_thana') is-invalid @enderror"
									name="{{ 'present_address_thana' }}" id="present_address_thana"
									value="{{ @$student['present_address_thana'] ?? old('present_address_thana') }}" placeholder="Thana" />
								@error('present_address_thana')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label for="present_address_post_office" class="form-label"><strong>Postal Code<code>*</code></strong></label>
								<input type="text" class="form-control @error('present_address_post_office') is-invalid @enderror"
									name="{{ 'present_address_post_office' }}" id="present_address_post_office"
									value="{{ @$student['present_address_post_office'] ?? old('present_address_post_office') }}"
									placeholder="Postal Code" />
								@error('present_address_post_office')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md">
								<label for="present_address" class="form-label"><strong>House Address<code>*</code></strong></label>
								<textarea type="text" class="form-control @error('present_address') is-invalid @enderror"
								 name="{{ 'present_address' }}" id="present_address" placeholder="House Adress">{{ @$student['present_address'] ?? old('present_address') }}</textarea>
								@error('present_address')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Permanent Address ----------- --}}
							<h3 class="h3 text-center text-decoration-underline"  style="color: #01224E">Permanent Address</h3>
							<div>
								<input type="checkbox" class="mt-5" @if (@$student['check_address']) checked @endif name="check_address"
									id="check_address" /> Same as Present Address
							</div>

							<div class="col-md-6 p-3">
								<label for="permanent_address_district" class="form-label"><strong>District Name
										<code>*</code></strong></label>
								<input type="text"
									class="form-control permanent_address_field @error('permanent_address_district') is-invalid @enderror"
									name="{{ 'permanent_address_district' }}" id="permanent_address_district"
									value="{{ @$student['permanent_address_district'] ?? old('permanent_address_district') }}"
									placeholder="District Name" />
								@error('permanent_address_district')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label for="permanent_address_village" class="form-label"><strong>Village Name <code>*</code></strong></label>
								<input type="text"
									class="form-control permanent_address_field @error('permanent_address_village') is-invalid @enderror"
									name="{{ 'permanent_address_village' }}" id="permanent_address_village"
									value="{{ @$student['permanent_address_village'] ?? old('permanent_address_village') }}"
									placeholder="Village Name" />
								@error('permanent_address_village')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label for="permanent_address_thana" class="form-label"><strong>Thana <code>*</code></strong></label>
								<input type="text"
									class="form-control permanent_address_field @error('permanent_address_thana') is-invalid @enderror"
									name="{{ 'permanent_address_thana' }}" id="permanent_address_thana"
									value="{{ @$student['permanent_address_thana'] ?? old('permanent_address_thana') }}" placeholder="Thana" />
								@error('permanent_address_thana')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label for="permanent_address_post_office" class="form-label"><strong>Postal
										Code<code>*</code></strong></label>
								<input type="text"
									class="form-control permanent_address_field @error('permanent_address_post_office') is-invalid @enderror"
									name="{{ 'permanent_address_post_office' }}" id="permanent_address_post_office"
									value="{{ @$student['permanent_address_post_office'] ?? old('permanent_address_post_office') }}"
									placeholder="Postal Code" />
								@error('permanent_address_post_office')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md">
								<label for="permanent_address" class="form-label"><strong>House Address <code>*</code></strong></label>
								<textarea type="text"
								 class="form-control permanent_address_field @error('permanent_address') is-invalid @enderror"
								 name="{{ 'permanent_address' }}" id="permanent_address" placeholder="House Adress">{{ @$student['permanent_address'] ?? old('permanent_address') }}</textarea>
								@error('permanent_address')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							{{-- ----------- Guardian Information ----------- --}}

							<h3 class="h3 text-center text-decoration-underline"  style="color: #01224E">Absence of Guardian Information</h3>
							<div class="col-md-6 p-3">
								<label class="form-label"><strong>Name of guardian </strong></label>
								<input type="text" class="form-control @error('absent_of_parent_name') is-invalid @enderror"
									name="{{ 'absent_of_parent_name' }}" id="absent_of_parent_name"
									value="{{ @$student['absent_of_parent_name'] ?? old('absent_of_parent_name') }}"
									placeholder="Guardian Name" />
								@error('absent_of_parent_name')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label class="form-label"><strong>Relationship with guardian </strong></label>
								<input type="text" class="form-control"
									@error('absent_of_parent_relation')
                            is-invalid @enderror
									name="{{ 'absent_of_parent_relation' }}" id="absent_of_parent_relation"
									value="{{ @$student['absent_of_parent_relation'] ?? old('absent_of_parent_relation') }}"
									placeholder="Relationship to Guardian" />
								@error('absent_of_parent_relation')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label class="form-label"><strong>Occupation of Guardian </strong></label>
								<input type="text" class="form-control @error('absent_of_parent_occupation') is-invalid @enderror"
									name="{{ 'absent_of_parent_occupation' }}" id="absent_of_parent_occupation"
									value="{{ @$student['absent_of_parent_occupation'] ?? old('absent_of_parent_occupation') }}"
									placeholder="Guardian Occupation" />
								@error('absent_of_parent_occupation')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="col-md-6 p-3">
								<label class="form-label"><strong>Income of Guardian</strong></label>
								<input type="text" class="form-control @error('absent_of_parent_annual_earning') is-invalid @enderror"
									name="{{ 'absent_of_parent_annual_earning' }}" id="absent_of_parent_annual_earning"
									value="{{ @$student['absent_of_parent_annual_earning'] ?? old('absent_of_parent_annual_earning') }}"
									placeholder="Guardian Income" />
								@error('absent_of_parent_annual_earning')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>


							<h3 class="h3 text-center text-decoration-underline"  style="color: #01224E">Additional Information</h3>
							<div class="col-md-12 p-3">
								<label for="previous_scholarship_name_group" class="form-label"><strong>Previous Scholarship Organization (if
										any) </strong></label>
								<input type="text" class="form-control @error('previous_scholarship_name_group') is-invalid @enderror"
									name="{{ 'previous_scholarship_name_group' }}" id="previous_scholarship_name_group"
									value="{{ @$student['previous_scholarship_name_group'] ?? old('previous_scholarship_name_group') }}"
									placeholder="Scholarship Organization Name" />
								@error('previous_scholarship_name_group')
									<div class="invalid-feedback">{{ $message }}</div>
								@enderror
							</div>

							<div class="text-end mt-4">
								<button type="submit" class="btn px-4 py-3 btn-outline-dark">
									{{ @$student ? 'Update' : 'Go Next' }}
								</button>
								{{-- <input class="btn px-4 py-3 btn-outline-dark" type="submit" value="Go Next"/> --}}
							</div>
						</form>
					</div>
					<div class="col-lg-4 col-md-12 text-white aside px-4 py-5">
						<div style="position: sticky;top: 0;">
							<div class="mb-3">
								<h1 class="h3">Our Honourable Members</h1>
								<div class="px-0">
									<ul class="m-0 p-0">
										@foreach ($members as $member)
											<li class="d-flex justify-content-start align-items-center mb-2">
												<span class="opacity-50 d-flex align-items-center me-3 fs-2">
													<img src="{{ asset('upload/member/' . $member->banner) }}" alt="" height="50" width="50"
														class="rounded-circle" />
												</span>
												<span>{{ $member->title }}</span>
											</li>
										@endforeach
										{{-- <li class="d-flex align-items-center r mb-2">
                                    <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                        <ion-icon class="p-2" name="person"></ion-icon>
                                    </span>
                                    <span>Demo Demo</span>
                                </li>
                                <li class="d-flex justify-content-start align-items-center mb-2">
                                    <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <ion-icon class="p-2" name="person"></ion-icon>
                                    </span>
                                    <span>Demo Demo</span>
                                </li>
                                <li class="d-flex justify-content-start align-items-center mb-2">
                                    <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <ion-icon class="p-2" name="person"></ion-icon>
                                    </span>
                                    <span>Demo Demo</span>
                                </li>
                                <li class="d-flex justify-content-start align-items-center mb-2">
                                    <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                    <ion-icon class="p-2" name="person"></ion-icon>
                                    </span>
                                    <span>Demo Demo</span>
                                </li> --}}
									</ul>
								</div>
							</div>

							<div class="mb-3">
								<h1 class="h3">Out Program Information</h1>
								<p class="opacity-50 text-justify" style="text-align: justify;">
									<small class="text-justify">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium assumenda aut beatae
										consectetur cupiditate, deserunt ducimus et eveniet facilis ipsa, iure minus molestias odit officiis pariatur
										quae repellendus sed tempore velit veniam voluptate voluptatibus? Adipisci aliquid architecto assumenda
										dolorum eos expedita fugit in ipsa itaque magnam minima modi nam nisi numquam odit ratione reiciendis tempore,
										temporibus totam vitae voluptates voluptatibus voluptatum? Accusamus
									</small>
								</p>
							</div>

							<div class="mb-2">
								<h1 class="h3">Our Contact Information</h1>

							</div>
							<div class="d-flex flex-column px-0">
								<ul class="m-0 p-0">
									<li class="d-flex justify-content-start align-items-center mb-2">
										<span class="opacity-50 d-flex align-items-center me-3 fs-2">
											<ion-icon class="p-1" name="call"></ion-icon>
										</span>
										<span>01822-449264</span>
									</li>
									<li class="d-flex align-items-center r mb-2">
										<span class="opacity-50 d-flex align-items-center me-3 fs-2">
											<ion-icon class="p-1" name="mail"></ion-icon>
										</span>
										<span>contact@swasavar.org</span>
									</li>
									<li class="d-flex justify-content-start align-items-center mb-2">
										<span class="opacity-50 d-flex align-items-center me-3 fs-2">
											<ion-icon class="p-1" name="pin"></ion-icon>
										</span>
										<span>Savar,Dhaka, Dhaka,<br />
											Bangladesh, 1340
										</span>
									</li>
								</ul>
								<div class="text-muted text-center">

									<code>Developed By : DIGI5 </code> <br />
									<code>
										<a class="fs-3" href="#" target="_blank">
											<ion-icon name="logo-codepen"></ion-icon>
										</a>
									</code>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
		</script>
		<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
		<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js"></script>

		<script>
			$(document).ready(function() {
				// Select the checkbox and permanent address fields
				var checkbox = $('#check_address');
				var permanentFields = $('.permanent_address_field');

				// Initial check of the checkbox state
				if (checkbox.is(':checked')) {
					permanentFields.prop('disabled', true);
				}

				// Toggle the disabled attribute when the checkbox state changes
				checkbox.on('change', function() {
					permanentFields.prop('disabled', this.checked);
				});
			});
		</script>

		<script>
			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						$('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
						$('#imagePreview').hide();
						$('#imagePreview').fadeIn(650);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}

			$("#imageUpload").change(function() {
				readURL(this);
			});
		</script>

		<script type="text/javascript">
			/* Bootstrap 5 JS included */
			/* vanillajs-datepicker 1.1.4 JS included */

			const getDatePickerTitle = elem => {
				// From the label or the aria-label
				const label = elem.nextElementSibling;
				let titleText = '';
				if (label && label.tagName === 'LABEL') {
					titleText = label.textContent;
				} else {
					titleText = elem.getAttribute('aria-label') || '';
				}
				return titleText;
			}

			const elems = document.querySelectorAll('.datepicker_input');
			for (const elem of elems) {
				const datepicker = new Datepicker(elem, {
					'format': 'dd/MM/yyyy', // UK format
					title: getDatePickerTitle(elem)
				});
			}


			const inputField = document.getElementById('datepicker2');

			// or adding `keydown` on the `input` element
			inputField.addEventListener('keydown', event => {
				console.log(`User pressed: ${event.key}`);
				console.log('hi');
				event.preventDefault();
				return false;
			});
		</script>
	</body>

</html>
