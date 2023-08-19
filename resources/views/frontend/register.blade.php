<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Scholarship Register Form</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ url('frontend/assets/css/registerform.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ url('frontend/assets/js/vendor/form.js') }}"></script>

</head>

<body>



    @section('main-container')
    <section>
        <div class="container my-5">
            <h1 class="text-center mb-5">Registration Form</h1>

            <form action="{{ @$student ? route('students.update', $student->id) : route('students.store') }}"
                class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($student))
                @method('put')
                @endif
                <div class="row g-3 mt-5">
                    <div class="col-md">

                        <div class="form-group mb-5">

                            <input type="radio" class="form-check-input" name="school_madrasa" id="school"
                                value="school" @if(@$student->school_madrasa == "school") checked @endif
                            {{old('school_madrasa') == 'school' ? 'checked' : ''}}>
                            <label class="form-check-label" for="school">School</label>

                            <input type="radio" class="form-check-input" name="school_madrasa" id="madrasha"
                                value="madrasha" @if(@$student->school_madrasa == "madrasha") checked @endif {{
                            old('school_madrasa') == 'madrasha' ? 'checked' : ''}}>
                            <label class="form-check-label" for="madrasha">Madrasha<code>*</code></label>

                            @error('school_madrasa')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                    </div>

                    <div class="col-md">
                        <div class="form-group mb-5">
                            <input type="radio" class="form-check-input" name="student_type" id="male" value="male"
                                @if(@$student->student_type == "male") checked @endif {{ old('student_type') == 'male' ?
                            'checked' : ''}}>
                            <label class="form-check-label" for="male">Male</label>

                            <input type="radio" class="form-check-input" name="student_type" id="female" value="female"
                                @if(@$student->student_type == "female") checked @endif {{ old('student_type') ==
                            'female' ?
                            'checked' : ''}}>
                            <label class="form-check-label" for="female">Female<code>*</code></label>

                            @error('student_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js">
                        </script>
                        <h3>Upload Image</h3>

                        @if(isset($student))
                        <img src="{{asset('upload/profile/'.$student->image)}}" id="img" alt="">
                        <canvas id="canv1" style="display:none"></canvas>
                        @else
                        <canvas id="canv1"></canvas>
                        @endif


                        <p>
                            Filename:
                            <input type="file" name="image" multiple="false" accept="image/*" id=finput
                                onchange="upload()">
                        </p>
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <h6 class="color">Student Information:</h6>

                <div class="row g-3 mt-2 mb-4">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="name_en">Name <code>*(English)</code></label>
                            <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                                name="{{ 'name_en' }}" id="name_en" value="{{ @$student->name_en  ?? old('name_en')}}"
                                placeholder="Name" />
                            @error('name_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="name_bn">Name <code>*(বাংলা)</code></label>
                            <input type="text" class="form-control @error('name_bn') is-invalid @enderror"
                                name="{{ 'name_bn' }}" id="name_bn" value="{{ @$student->name_bn ?? old('name_bn')}}"
                                placeholder="নাম" />
                            @error('name_bn')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="area">Area<code>*</code></label>
                            <input type="text" class="form-control @error('area') is-invalid @enderror"
                                name="{{ 'area' }}" id="area" value="{{ @$student->area ?? old('area')}}"
                                placeholder="Area" />
                            @error('area')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="institute_id">Choose Your School<code>*</code></label>
                    <select class="form-select" name="institute_id" id="institute_id">
                        @if (isset($student))
                        <option value="{{ $student->institute_id }}">{{ $student->institute->name }}</option>
                        @else
                        <option value=" ">Select School Name</option>
                        @endif
                        @foreach($institutes as $key=>$institute)
                        <option value="{{$key}}">{{$institute}}</option>
                        @endforeach
                    </select>
                    @error('institute_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="class">Class<code>*</code></label>
                            <select class="form-select" name="student_class_id" id="student_class_id">
                                @if (isset($student))
                                <option value="{{ $student->student_class_id }}">{{ $student->student_class->name }}
                                </option>
                                @else
                                <option value=" ">Select Class Name</option>
                                @endif
                                @foreach($student_classes as $key=>$student_class)
                                <option value="{{$key}}">{{$student_class}}</option>
                                @endforeach
                            </select>
                            @error('class')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-group">
                            <label for="class_roll">Class Roll<code>*</code></label>
                            <input type="number" class="form-control @error('class_roll') is-invalid @enderror"
                                name="{{ 'class_roll' }}" id="class_roll"
                                value="{{ @$student->class_roll ?? old('class_roll')}}" placeholder="Roll" />
                            @error('class_roll')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="class_division">Subject<code>*</code></label>
                            <input type="text" class="form-control @error('class_division') is-invalid @enderror"
                                name="{{ 'class_division' }}" id="class_roll"
                                value="{{ @$student->class_division ?? old('class_division')}}" placeholder="Subject" />
                            @error('class_division')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="class_section">Section<code>*</code></label>
                            <input type="text" class="form-control @error('class_section') is-invalid @enderror"
                                name="{{ 'class_section' }}" id="class_section"
                                value="{{ @$student->class_section  ?? old('class_section')}}" placeholder="Section" />
                            @error('class_section')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="dob">Date of Birth <code>*</code></label><br />
                            <div class="row">
                                <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob"
                                    name="{{ 'dob' }}" value="{{ @$student->dob ?? old('dob')}}">
                                @error('dob')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="blood_group">Blood Group <code>*</code></label>
                            <select class="form-select" name="blood_group" id="blood_group">
                                @if (isset($student))
                                <option value="{{ $student->blood_group }}">
                                    @if ($student->blood_group == 1 )
                                    A+
                                    @elseif ($student->blood_group == 2 )
                                    B+
                                    @elseif ($student->blood_group == 3 )
                                    O+
                                    @elseif ($student->blood_group == 4 )
                                    AB+
                                    @elseif ($student->blood_group == 5 )
                                    A-
                                    @elseif ($student->blood_group == 6 )
                                    B-
                                    @elseif ($student->blood_group == 6 )
                                    O-
                                    @elseif ($student->blood_group == 6 )
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
                    </div>
                </div>





                <h6 class="color">Parents Information:</h6>

                <div class="row g-3 mt-2 mb-4">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="father_name_en">Father Name <code>*(English)</code></label>
                            <input type="text" class="form-control @error('father_name_en') is-invalid @enderror"
                                name="{{ 'father_name_en' }}" id="father_name_en"
                                value="{{ @$student->father_name_en ?? old('father_name_en')}}"
                                placeholder="Father Name" />
                            @error('father_name_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="father_name_bn">Father Name <code>*(বাংলা)</code></label>
                            <input type="text" class="form-control @error('father_name_bn') is-invalid @enderror"
                                name="{{ 'father_name_bn' }}" id="father_name_bn"
                                value="{{ @$student->father_name_bn ?? old('father_name_bn')}}"
                                placeholder="বাবার নাম" />
                            @error('father_name_bn')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="father_occupation">Profession</label>
                            <input type="text" class="form-control @error('father_occupation') is-invalid @enderror"
                                name="{{ 'father_occupation' }}" id="father_occupation"
                                value="{{ @$student->father_occupation ?? old('father_occupation')}}"
                                placeholder="Profession" />
                            @error('father_occupation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row g-3 mt-2 mb-4">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="mother_name_en">Mother Name <code>*(English)</code></label>
                            <input type="text" class="form-control @error('mother_name_en') is-invalid @enderror"
                                name="{{ 'mother_name_en' }}" id="mother_name_en"
                                value="{{ @$student->mother_name_en ?? old('mother_name_en')}}"
                                placeholder="Mother Name" />
                            @error('mother_name_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="mother_name_bn">Mother Name <code>*(বাংলা)</code></label>
                            <input type="text" class="form-control @error('mother_name_bn') is-invalid @enderror"
                                name="{{ 'mother_name_bn' }}" id="mother_name_bn"
                                value="{{ @$student->mother_name_bn  ?? old('mother_name_bn')}}"
                                placeholder="মায়ের নাম" />
                            @error('mother_name_bn')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="mother_occupation">Profession</label>
                            <input type="text" class="form-control @error('mother_occupation') is-invalid @enderror"
                                name="{{ 'mother_occupation' }}" id="mother_occupation"
                                value="{{ @$student->mother_occupation  ?? old('mother_occupation')}}"
                                placeholder="Profession" />
                            @error('mother_occupation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="border mb-5"></div>

                <h6 class="mb-5 color">Present Address:</h6>
                <div class="form-group mb-5">
                    <label for="present_address">House Adress <code>*</code></label>
                    <input type="text" class="form-control @error('present_address') is-invalid @enderror"
                        name="{{ 'present_address' }}" id="present_address"
                        value="{{ @$student->present_address  ?? old('present_address')}}" placeholder="House Adress" />
                    @error('present_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="border"></div>
                <h6 class="mt-5 color">Permanent Address:</h6>
                <div class="row g-3 mt-3 mb-4">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="permanent_address_district">Division Name<code>*</code></label>
                            <input type="text"
                                class="form-control @error('permanent_address_district') is-invalid @enderror"
                                name="{{ 'permanent_address_district' }}" id="permanent_address_district"
                                value="{{ @$student->permanent_address_district  ?? old('permanent_address_district')}}"
                                placeholder="Division Name" />
                            @error('permanent_address_district')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="permanent_address_village">Village Name <code>*</code></label>
                            <input type="text"
                                class="form-control @error('permanent_address_village') is-invalid @enderror"
                                name="{{ 'permanent_address_village' }}" id="permanent_address_village"
                                value="{{ @$student->permanent_address_village ?? old('permanent_address_village')}}"
                                placeholder="Village Name" />
                            @error('permanent_address_village')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="permanent_address_thana">Select Thana <code>*</code></label>
                            <input type="text"
                                class="form-control @error('permanent_address_thana') is-invalid @enderror"
                                name="{{ 'permanent_address_thana' }}" id="permanent_address_thana"
                                value="{{ @$student->permanent_address_thana ?? old('permanent_address_thana')}}"
                                placeholder="Postal Code" />
                            @error('permanent_address_thana')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-group">
                            <label for="permanent_address_post_office">Postal Code <code>*</code></label>
                            <input type="number"
                                class="form-control @error('permanent_address_post_office') is-invalid @enderror"
                                name="{{ 'permanent_address_post_office' }}" id="permanent_address_post_office"
                                value="{{ @$student->permanent_address_post_office ?? old('permanent_address_post_office')}}"
                                placeholder="Postal Code" />
                            @error('permanent_address_post_office')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="form-group mb-5">
                    <label for="permanent_address">House Adress <code>*</code></label>
                    <input type="text" class="form-control @error('permanent_address') is-invalid @enderror"
                        name="{{ 'permanent_address' }}" id="permanent_address"
                        value="{{ @$student->permanent_address  ?? old('permanent_address')}}"
                        placeholder="House Adress" />
                    @error('permanent_address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row g-3 mt-3 mb-5">

                    <div class="col-md">
                        <div class="form-group">
                            <label for="mobile">Mobile Number <code>*</code></label>
                            <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                name="{{ 'mobile' }}" id="mobile" value="{{ @$student->mobile  ?? old('mobile')}}"
                                placeholder="Mobile">
                            @error('mobile')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                name="{{ 'facebook' }}" id="facebook"
                                value="{{ @$student->facebook  ?? old('facebook')}}" placeholder="Facebook" />
                            @error('facebook')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-group">
                            <label for="email">Email<code>*</code></label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                name="{{ 'email' }}" id="email" value="{{ @$student->email  ?? old('email')}}"
                                placeholder="Email" />
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="border-gardient">
                    <h6 class="mb-5 color">Absence of Guardian Information:</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md">
                                    <span> Name of guardian</span>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('absent_of_parent_name') is-invalid @enderror"
                                            name="{{ 'absent_of_parent_name' }}" id="absent_of_parent_name"
                                            value="{{ @$student->absent_of_parent_name  ?? old('absent_of_parent_name')}}"
                                            placeholder="Guardian Name" />
                                        @error('absent_of_parent_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-3">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md">
                                    <span>Relationship with guardian</span>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text" class="form-control" @error('absent_of_parent_relation')
                                            is-invalid @enderror name="{{ 'absent_of_parent_relation' }}"
                                            id="absent_of_parent_relation"
                                            value="{{ @$student->absent_of_parent_relation  ?? old('absent_of_parent_relation')}}"
                                            placeholder="Relationship to Guardian" />
                                        @error('absent_of_parent_relation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-3">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md">
                                    <span>Occupation of Guardian</span>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control @error('absent_of_parent_occupation') is-invalid @enderror"
                                            name="{{ 'absent_of_parent_occupation' }}" id="absent_of_parent_occupation"
                                            value="{{ @$student->absent_of_parent_occupation   ?? old('absent_of_parent_occupation')}}"
                                            placeholder="Guardian Occupation" />
                                        @error('absent_of_parent_occupation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md">
                                    <span>Income of Guardian</span>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="number"
                                            class="form-control @error('absent_of_parent_annual_earning') is-invalid @enderror"
                                            name="{{ 'absent_of_parent_annual_earning' }}"
                                            id="absent_of_parent_annual_earning"
                                            value="{{ @$student->absent_of_parent_annual_earning  ?? old('absent_of_parent_annual_earning')}}"
                                            placeholder="Guardian Income" />
                                        @error('absent_of_parent_annual_earning')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="border mb-5"></div>

                <h6 class="mb-5 color">Additional Information:</h6>
                <div class="form-group mb-5">
                    <label for="previous_scholarship_name_group">Previous Scholarship Organization (if
                        any)</label>
                    <input type="text"
                        class="form-control @error('previous_scholarship_name_group') is-invalid @enderror"
                        name="{{ 'previous_scholarship_name_group' }}" id="previous_scholarship_name_group"
                        value="{{ @$student->previous_scholarship_name_group  ?? old('previous_scholarship_name_group')}}"
                        placeholder="Scholarship Organization Name" />
                    @error('previous_scholarship_name_group')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row justify-content-end">
                    <button type="submit" class="btn btn-next">
                        {{ @$student ? 'Update' : 'Submit' }}
                    </button>
                </div>
            </form>
        </div>
    </section>

</body>