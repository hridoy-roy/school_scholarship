<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
          integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Document</title>
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            background-image: linear-gradient(
                to left bottom,
                #051937,
                #05162f,
                #051327,
                #040f1f,
                #010a18
            );

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
            background-image: linear-gradient(
                to left bottom,
                #051937,
                #002350,
                #002d69,
                #003684,
                #01409f
            );
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

        .avatar-upload .avatar-edit input + label {
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

        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }

        .avatar-upload .avatar-edit input + label:after {
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

        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }


    </style>
</head>
<body>
<div class="container">

    {{-- ----------- Link Menu Button ----------- --}}
    @if (count($menus) > 0)
        @foreach ($menus as $menu)
        <a href="{{ $menu->link }}" class="btn btn-success">{{ $menu->name }}</a>
    @endforeach
    @endif

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
                        <h1 class=" h1 text-center">Registration Form </h1>
                        <div class="d-flex justify-content-center">

                            {{-- ----------- Image Upload ----------- --}}
                            <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
                            <div class="mb-3 text-center">
                                <label class="form-label"><strong>Upload Image</strong></label>

                                @if(isset($student))
                                <img src="{{asset('upload/profile/'.$student['image'])}}" id="img" alt="Profile Image">
                                {{-- <canvas id="canv1" style="display:none"></canvas> --}}
                                @else
                                {{-- <canvas id="canv1"></canvas> --}}
                                @endif

                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="image" id="imageUpload" accept="image/*" onchange="upload()"/>
                                        <label for="imageUpload"></label>
                                    </div>
                                    @error('image')
                                        <p><code>{{ $message }}</code></p>
                                    @enderror
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                             style="background-image: url('http://i.pravatar.cc/500?img=7');">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <h3 class="h3 text-success">Student Information</h3>

                    {{-- ----------- School or Madrasha ----------- --}}
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>School or Madrasha</strong></label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="school_madrasa" id="school"
                                value="school" @if(@$student['school_madrasa']=="school" ) checked @endif
                                {{old('school_madrasa')=='school' ? 'checked' : '' }}>
                            <label class="form-check-label" for="school">School</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="school_madrasa" id="madrasha"
                                value="madrasha" @if(@$student['school_madrasa']=="madrasha" ) checked @endif {{
                                old('school_madrasa')=='madrasha' ? 'checked' : '' }}>
                            <label class="form-check-label" for="madrasha">Madrasha</label>
                        </div>
                        @error('school_madrasa')
                            <p><code>{{ $message }}</code></p>
                        @enderror
                    </div>

                    {{-- ----------- Male or Female ----------- --}}
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Male OR Female</strong></label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="student_type" id="male" value="male"
                                @if(@$student['student_type']=="male" ) checked @endif {{ old('student_type')=='male'
                                ? 'checked' : '' }}>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="student_type" id="female" value="female"
                                @if(@$student['student_type']=="female" ) checked @endif {{
                                old('student_type')=='female' ? 'checked' : '' }}>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        @error('student_type')
                            <p><code>{{ $message }}</code></p>
                        @enderror
                    </div>

                    {{-- ----------- Student Name (English) ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="name_en" class="form-label"><strong>Name <code>*(English)</code></strong></label>
                        <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                            name="{{ 'name_en' }}" id="name_en" value="{{ @$student['name_en']  ?? old('name_en')}}"
                            placeholder="Name" />
                        @error('name_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Student Name (Bangla) ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="name_bn" class="form-label"><strong>Name <code>*(বাংলা)</code></strong></label>
                        <input type="text" class="form-control @error('name_bn') is-invalid @enderror"
                            name="{{ 'name_bn' }}" id="name_bn" value="{{ @$student['name_bn'] ?? old('name_bn')}}"
                            placeholder="নাম" />
                        @error('name_bn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Area ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="area" class="form-label"><strong>Area <code>*</code></strong></label>
                        <select class="form-select" name="area_id" id="institute_id">
                            @if (isset($student))
                            <option value="{{ $student['area_id'] }}">{{ $student['area_name'] }}</option>
                            @else
                            <option value=" ">Select Area</option>
                            @endif
                            @foreach($areas as $area)
                            <option value="{{$area->id}}">{{$area->name}}</option>
                            @endforeach
                        </select>
                        @error('area_id')
                            <p><code>{{ $message }}</code></p>
                        @enderror
                    </div>

                    {{-- ----------- School ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="institute_id" class="form-label"><strong>School <code>*</code></strong></label>
                        <select class="form-select" name="institute_id" id="institute_id">
                            @if (isset($student))
                            <option value="{{ $student['institute_id'] }}">{{ $student['institute_name'] }}</option>
                            @else
                            <option value=" ">Select School Name</option>
                            @endif
                            @foreach($institutes as $key=>$institute)
                            <option value="{{$key}}">{{$institute}}</option>
                            @endforeach
                        </select>
                        @error('institute_id')
                            <p><code>{{ $message }}</code></p>
                        @enderror
                    </div>

                    {{-- ----------- Class ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="class" class="form-label"><strong>Class<code>*</code></strong></label>
                        <select class="form-select" name="student_class_id" id="student_class_id">
                            @if (isset($student))
                            <option value="{{ $student['student_class_id'] }}">{{ $student['student_class_name'] }}
                            </option>
                            @else
                            <option value=" ">Select Class Name</option>
                            @endif
                            @foreach($student_classes as $key=>$student_class)
                            <option value="{{$key}}">{{$student_class}}</option>
                            @endforeach
                        </select>
                        @error('student_class_id')
                            <p><code>{{ $message }}</code></p>
                        @enderror
                    </div>

                    {{-- ----------- Class Roll ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="class_roll" class="form-label"><strong>Class Roll<code>*</code></strong></label>
                        <input type="number" class="form-control @error('class_roll') is-invalid @enderror"
                            name="{{ 'class_roll' }}" id="class_roll"
                            value="{{ @$student['class_roll'] ?? old('class_roll')}}" placeholder="Roll" />
                        @error('class_roll')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Subject ----------- --}}
                    <div class="col-md-6 p-3">
                        <label class="form-label" for="class_division"><strong>Subject</strong></label>
                        <select class="form-select" name="class_division" id="class_division">
                            @if (isset($student))
                            <option value="{{ $student['class_division'] }}">
                                @if ($student['class_division'] == 1 )
                                Science
                                @elseif ($student['class_division'] == 2 )
                                Commerce
                                @elseif ($student['class_division'] == 3 )
                                Arts
                                @else
                                Others
                                @endif
                            </option>
                            @else
                            <option value=" ">Subject</option>
                            @endif
                            <option value="Science" {{ old('class_division')==='Science' ? 'selected' : '' }}>Science
                            </option>
                            <option value="Commerce" {{ old('class_division')==='Commerce' ? 'selected' : '' }}>Commerce
                            </option>
                            <option value="Arts" {{ old('class_division')==='Arts' ? 'selected' : '' }}>Arts
                            </option>
                            <option value="Others" {{ old('class_division')==='Others' ? 'selected' : '' }}>Others
                            </option>
                        </select>
                        @error('class_division')
                            <p><code>{{ $message }}</code></p>
                        @enderror
                    </div>

                    {{-- ----------- Section ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="class_section" class="form-label"><strong>Section<code>*</code></strong></label>
                        <input type="text" class="form-control @error('class_section') is-invalid @enderror"
                            name="{{ 'class_section' }}" id="class_section"
                            value="{{ @$student['class_section'] ?? old('class_section')}}" placeholder="Section" />
                        @error('class_section')
                            <p><code>{{ $message }}</code></p>
                        @enderror
                    </div>

                    {{-- ----------- Date of Birth ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="dob" class="form-label"><strong>Date of Birth <code>*</code></strong></label>
                        <input type="date" id="txtDate" class="form-control" format="DD-MM-YYYY" @error('dob') is-invalid @enderror" id="dob"
                            name="{{ 'dob' }}" value="{{ @$student['dob'] ?? old('dob')}}">
                        @error('dob')
                            <p><code>{{ $message }}</code></p>
                        @enderror
                    </div>

                    {{-- ----------- Blood Group ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="blood_group" class="form-label"><strong>Blood Group <code>*</code> </strong></label>
                        <select class="form-select" name="blood_group" id="blood_group">
                            @if (isset($student))
                            <option value="{{ $student['blood_group'] }}">
                                @if ($student['blood_group'] == 1 )
                                A+
                                @elseif ($student['blood_group'] == 2 )
                                B+
                                @elseif ($student['blood_group'] == 3 )
                                O+
                                @elseif ($student['blood_group'] == 4 )
                                AB+
                                @elseif ($student['blood_group'] == 5 )
                                A-
                                @elseif ($student['blood_group'] == 6 )
                                B-
                                @elseif ($student['blood_group'] == 7 )
                                O-
                                @elseif ($student['blood_group'] == 8 )
                                B-
                                @else
                                AB-
                                @endif
                            </option>
                            @else
                            <option value=" ">Blood Group</option>
                            @endif
                            <option value="A+" {{ old('blood_group')==='A+' ? 'selected' : '' }}>A+
                            </option>
                            <option value="B+" {{ old('blood_group')==='B+' ? 'selected' : '' }}>B+
                            </option>
                            <option value="O+" {{ old('blood_group')==='O+' ? 'selected' : '' }}>O+
                            </option>
                            <option value="AB+" {{ old('blood_group')==='AB+' ? 'selected' : '' }}>AB+
                            </option>
                            <option value="A-" {{ old('blood_group')==='A-' ? 'selected' : '' }}>A-
                            </option>
                            <option value="B-" {{ old('blood_group')==='B-' ? 'selected' : '' }}>B-
                            </option>
                            <option value="O-" {{ old('blood_group')==='O-' ? 'selected' : '' }}>O-
                            </option>
                            <option value="AB-" {{ old('blood_group')==='AB-' ? 'selected' : '' }}>AB-
                            </option>
                        </select>
                        @error('blood_group')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <h3 class="h3 text-success">Parents Information</h3>

                    {{-- ----------- Father Name (English) ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="father_name_en" class="form-label"><strong>Father Name <code>*(English)</code></strong></label>
                        <input type="text" class="form-control @error('father_name_en') is-invalid @enderror"
                            name="{{ 'father_name_en' }}" id="father_name_en"
                            value="{{ @$student['father_name_en'] ?? old('father_name_en')}}"
                            placeholder="Father Name" />
                        @error('father_name_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Father Name (Bangla) ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="father_name_bn" class="form-label"><strong>Father Name <code>*(বাংলা)</code></strong></label>
                        <input type="text" class="form-control @error('father_name_bn') is-invalid @enderror"
                            name="{{ 'father_name_bn' }}" id="father_name_bn"
                            value="{{ @$student['father_name_bn'] ?? old('father_name_bn')}}"
                            placeholder="বাবার নাম" />
                        @error('father_name_bn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Father Occupation ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="father_occupation" class="form-label"><strong>Profession</strong></label>
                        <input type="text" class="form-control @error('father_occupation') is-invalid @enderror"
                            name="{{ 'father_occupation' }}" id="father_occupation"
                            value="{{ @$student['father_occupation'] ?? old('father_occupation')}}"
                            placeholder="Profession" />
                        @error('father_occupation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Mobile Number ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="mobile" class="form-label"><strong>Mobile Number  <code>*</code></strong></label>
                        <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                            name="{{ 'mobile' }}" id="mobile" value="{{ @$student['mobile']  ?? old('mobile')}}"
                            placeholder="Mobile">
                        @error('mobile')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Mother Name (English) ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="mother_name_en" class="form-label"><strong>Mother Name <code>*(English)</code></strong></label>
                        <input type="text" class="form-control @error('mother_name_en') is-invalid @enderror"
                            name="{{ 'mother_name_en' }}" id="mother_name_en"
                            value="{{ @$student['mother_name_en'] ?? old('mother_name_en')}}"
                            placeholder="Mother Name" />
                        @error('mother_name_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Mother Name (Bangla) ----------- --}}
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Mother Name <code>* (বাংলা)</code></strong></label>
                        <input type="text" class="form-control @error('mother_name_bn') is-invalid @enderror"
                            name="{{ 'mother_name_bn' }}" id="mother_name_bn"
                            value="{{ @$student['mother_name_bn']  ?? old('mother_name_bn')}}"
                            placeholder="মায়ের নাম" />
                        @error('mother_name_bn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Mother Name Profession ----------- --}}
                    <div class="col-md-6 p-3">
                        <label for="mother_occupation" class="form-label"><strong>Profession</strong></label>
                        <input type="text" class="form-control @error('mother_occupation') is-invalid @enderror"
                            name="{{ 'mother_occupation' }}" id="mother_occupation"
                            value="{{ @$student['mother_occupation']  ?? old('mother_occupation')}}"
                            placeholder="Profession" />
                        @error('mother_occupation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Email ----------- --}}
                    <div for="email" class="col-md-6 p-3">
                        <label class="form-label"><strong>Email </strong></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            name="{{ 'email' }}" id="email" value="{{ @$student['email']  ?? old('email')}}"
                            placeholder="Email" />
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Present Address ----------- --}}
                    <h3 class="h3 text-success">Present Address</h3>

                    <div class="col-md-6 p-3">
                        <label for="present_address_district" class="form-label"><strong>District Name <code>*</code></strong></label>
                        <input type="text"
                            class="form-control @error('present_address_district') is-invalid @enderror"
                            name="{{ 'present_address_district' }}" id="present_address_district"
                            value="{{ @$student['present_address_district']  ?? old('present_address_district')}}"
                            placeholder="District Name" />
                        @error('present_address_district')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 p-3">
                        <label for="present_address_village" class="form-label"><strong>Village Name <code>*</code></strong></label>
                        <input type="text"
                            class="form-control @error('present_address_village') is-invalid @enderror"
                            name="{{ 'present_address_village' }}" id="present_address_village"
                            value="{{ @$student['present_address_village'] ?? old('present_address_village')}}"
                            placeholder="Village Name" />
                        @error('present_address_village')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 p-3">
                        <label for="present_address_thana" class="form-label"><strong>Thana <code>*</code></strong></label>
                        <input type="text"
                            class="form-control @error('present_address_thana') is-invalid @enderror"
                            name="{{ 'present_address_thana' }}" id="present_address_thana"
                            value="{{ @$student['present_address_thana'] ?? old('present_address_thana')}}"
                            placeholder="Postal Code" />
                        @error('present_address_thana')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div  class="col-md-6 p-3">
                        <label for="present_address_post_office" class="form-label"><strong>Postal Code<code>*</code></strong></label>
                        <input type="number"
                            class="form-control @error('present_address_post_office') is-invalid @enderror"
                            name="{{ 'present_address_post_office' }}" id="present_address_post_office"
                            value="{{ @$student['present_address_post_office'] ?? old('present_address_post_office')}}"
                            placeholder="Postal Code" />
                        @error('present_address_post_office')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md">
                        <label for="present_address" class="form-label"><strong>House Address<code>*</code></strong></label>
                        <textarea type="text" class="form-control @error('present_address') is-invalid @enderror"
                            name="{{ 'present_address' }}" id="present_address"
                            placeholder="House Adress">{{ @$student['present_address']  ?? old('present_address')}}</textarea>
                        @error('present_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Permanent Address ----------- --}}
                    <h3 class="h3 text-success">Permanent Address</h3>
                    <div>
                        <input type="checkbox" class="mt-5" @if (@$student['check_address'])
                        checked
                        @endif name="check_address" id="check_address"/> Same as Present Address
                    </div>

                    <div class="col-md-6 p-3">
                        <label for="permanent_address_district" class="form-label"><strong>District Name <code>*</code></strong></label>
                        <input type="text"
                            class="form-control permanent_address_field @error('permanent_address_district') is-invalid @enderror"
                            name="{{ 'permanent_address_district' }}" id="permanent_address_district"
                            value="{{ @$student['permanent_address_district']  ?? old('permanent_address_district')}}"
                            placeholder="District Name" />
                        @error('permanent_address_district')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6 p-3">
                        <label for="permanent_address_village" class="form-label"><strong>Village Name  <code>*</code></strong></label>
                        <input type="text"
                            class="form-control permanent_address_field @error('permanent_address_village') is-invalid @enderror"
                            name="{{ 'permanent_address_village' }}" id="permanent_address_village"
                            value="{{ @$student['permanent_address_village'] ?? old('permanent_address_village')}}"
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
                            value="{{ @$student['permanent_address_thana'] ?? old('permanent_address_thana')}}"
                            placeholder="Postal Code" />
                        @error('permanent_address_thana')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6 p-3">
                        <label for="permanent_address_post_office" class="form-label"><strong>Postal Code<code>*</code></strong></label>
                        <input type="number"
                                class="form-control permanent_address_field @error('permanent_address_post_office') is-invalid @enderror"
                                name="{{ 'permanent_address_post_office' }}" id="permanent_address_post_office"
                                value="{{ @$student['permanent_address_post_office'] ?? old('permanent_address_post_office')}}"
                                placeholder="Postal Code" />
                            @error('permanent_address_post_office')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="col-md">
                        <label for="permanent_address" class="form-label"><strong>House Address <code>*</code></strong></label>
                        <textarea type="text" class="form-control permanent_address_field @error('permanent_address') is-invalid @enderror"
                            name="{{ 'permanent_address' }}" id="permanent_address"
                            placeholder="House Adress">{{ @$student['permanent_address']  ?? old('permanent_address')}}</textarea>
                        @error('permanent_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- ----------- Guardian Information ----------- --}}

                    <h3 class="h3 text-success">Absence of Guardian Information</h3>

                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Name of guardian </strong></label>
                        <input type="text"
                            class="form-control @error('absent_of_parent_name') is-invalid @enderror"
                            name="{{ 'absent_of_parent_name' }}" id="absent_of_parent_name"
                            value="{{ @$student['absent_of_parent_name']  ?? old('absent_of_parent_name')}}"
                            placeholder="Guardian Name" />
                        @error('absent_of_parent_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Relationship with guardian </strong></label>
                        <input type="text" class="form-control" @error('absent_of_parent_relation')
                            is-invalid @enderror name="{{ 'absent_of_parent_relation' }}"
                            id="absent_of_parent_relation"
                            value="{{ @$student['absent_of_parent_relation']  ?? old('absent_of_parent_relation')}}"
                            placeholder="Relationship to Guardian" />
                        @error('absent_of_parent_relation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Occupation of Guardian </strong></label>
                        <input type="text"
                            class="form-control @error('absent_of_parent_occupation') is-invalid @enderror"
                            name="{{ 'absent_of_parent_occupation' }}" id="absent_of_parent_occupation"
                            value="{{ @$student['absent_of_parent_occupation']   ?? old('absent_of_parent_occupation')}}"
                            placeholder="Guardian Occupation" />
                        @error('absent_of_parent_occupation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Income of Guardian</strong></label>
                        <input type="number"
                            class="form-control @error('absent_of_parent_annual_earning') is-invalid @enderror"
                            name="{{ 'absent_of_parent_annual_earning' }}"
                            id="absent_of_parent_annual_earning"
                            value="{{ @$student['absent_of_parent_annual_earning']  ?? old('absent_of_parent_annual_earning')}}"
                            placeholder="Guardian Income" />
                        @error('absent_of_parent_annual_earning')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <h3 class="h3 text-success">Additional Information:</h3>
                    <div class="col-md-12 p-3">
                        <label for="previous_scholarship_name_group" class="form-label"><strong>Previous Scholarship Organization (if any) </strong></label>
                        <input type="text"
                            class="form-control @error('previous_scholarship_name_group') is-invalid @enderror"
                            name="{{ 'previous_scholarship_name_group' }}" id="previous_scholarship_name_group"
                            value="{{ @$student['previous_scholarship_name_group']  ?? old('previous_scholarship_name_group')}}"
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
                <div class="mb-5">
                    <h1 class="h3">Our Member Info</h1>
                    <p class="opacity-50">
                        <small>
                            Fill out the from and we will get back to you whitin 24 hours
                        </small>
                    </p>
                    <p class="opacity-50">
                        <small>
                            Fill out the from and we will get back to you whitin 24 hours
                        </small>
                    </p>
                    <p class="opacity-50">
                        <small>
                            Fill out the from and we will get back to you whitin 24 hours
                        </small>
                    </p>
                </div>


                <div class="mb-5">
                    <h1 class="h3">Contact Information</h1>
                    <p class="opacity-50">
                        <small>
                            Fill out the from
                        </small>
                    </p>
                </div>
                <div class="d-flex flex-column px-0">
                    <ul class="m-0 p-0">
                        <li class="d-flex justify-content-start align-items-center mb-4">
              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                <ion-icon name="call"></ion-icon>
              </span>
                            <span>+134 1234 1234</span>
                        </li>
                        <li class="d-flex align-items-center r mb-4">
              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                <ion-icon name="mail"></ion-icon>
              </span>
                            <span>Help@contact.com</span>
                        </li>
                        <li class="d-flex justify-content-start align-items-center mb-4">
              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                <ion-icon name="pin"></ion-icon>
              </span>
                            <span>52 Buddy Ln Conway, <br/>
                Arkansas(AR), 72032
              </span>
                        </li>
                    </ul>
                    <div class="text-muted text-center">

                        <code>Created By : DIGI5 </code> <br/>
                        <code><a class="fs-3" href="#" target="_blank">
                                <ion-icon name="logo-codepen"></ion-icon>
                            </a></code>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imageUpload").change(function () {
        readURL(this);
    });
</script>

<script type="text/javascript">
    $(".date").datepicker({
        format: "dd/mm/yyyy",
    });
</script>
</body>
</html>
