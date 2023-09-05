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
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
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

    /*    Button */
        .margin-bottom-40 {
            margin-bottom:40px;
            margin-top:40px;
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

        .btn-mod, a.btn-mod {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 4px 13px;
            color: #fff;
            background: rgba(34,34,34, .9);
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

        .btn-mod.btn-border:hover, .btn-mod.btn-border:focus{
            color: #000;
            border-color: transparent;
            background: #fff;
        }

        .btn-mod:hover, .btn-mod:focus, a.btn-mod:hover, a.btn-mod:focus {
            font-weight: 400;
            color: rgba(255,255,255, .85);
            background: rgba(0,0,0, .7);
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
                <form class="row mb-3" action="{{ route('students.store') }}" class="form" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex mb-3 flex-column">
                        <h1 class=" h1 text-center text-decoration-underline ">Registration Form </h1>
                        <div class="d-flex justify-content-center">
                            <div class="mb-3 text-center">
                                <label class="form-label"><strong>Upload Image <span>*</span></strong></label>
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' required name="image" id="imageUpload"
                                               accept=".png, .jpg, .jpeg"/>
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                             style="background-image: url('http://i.pravatar.cc/500?img=2');">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <h3 class="h3 text-success text-center text-decoration-underline">Student Information</h3>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>School OR Madrasha <span>*</span></strong></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="school_madrasa" required id="School"
                                   value="school">
                            <label class="form-check-label" for="School">
                                School
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="school_madrasa" required id="Madrasha"
                                   value="madrasha">
                            <label class="form-check-label" for="Madrasha">
                                Madrasha
                            </label>
                        </div>
                        @error('school_madrasa')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Male OR Female <span>*</span></strong></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="student_type" required id="Male"
                                   value="male">
                            <label class="form-check-label" for="Male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="student_type" required id="Female"
                                   value="female">
                            <label class="form-check-label" for="Female">
                                Female
                            </label>
                        </div>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Name <span>* (English)</span></strong></label>
                        <input required placeholder="Name * (English)" type="text" name="name_en"/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Name <span>* (বাংলা)</span></strong></label>
                        <input required placeholder="Name * (বাংলা)" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Choose Your Area <span>*</span></strong></label>
                        <select required class="form-select">
                            <option selected>Open this select Area</option>
                            @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->name}}</option>
                            @endforeach
                        </select>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Choose Your School <span>*</span></strong></label>
                        <select required class="form-select">
                            <option selected>Open this select School</option>
                            @foreach($institutes as $key=>$institute)
                                <option value="{{$key}}">{{$institute}}</option>
                            @endforeach
                        </select>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Choose Your Class <span>*</span></strong></label>
                        <select required class="form-select">
                            <option selected>Open this select Class</option>
                            @foreach($student_classes as $key=>$student_class)
                                <option value="{{$key}}">{{$student_class}}</option>
                            @endforeach
                        </select>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Class Roll *</strong></label>
                        <input required placeholder="Class Roll *" type="text" name="" id=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Choose Your Subject</strong></label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select Subject</option>
                            <option value="Science">Science</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Arts">Arts</option>
                            <option value="Others">Others</option>
                        </select>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Section</strong></label>
                        <input placeholder="Section" type="email" name="" id=""/>

                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Date of Birth *</strong></label>
                        <div class="form-floating input-group mb-4">
                            <input type="text" id="datepicker2" class="datepicker_input form-control"
                                   placeholder="DD/MM/YYYY" required>
                            <i class="bi bi-calendar-date input-group-text"></i>
                        </div>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Blood Group </strong></label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <h3 class="h3 text-warning text-center text-decoration-underline">Parents Information</h3>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Father Name <span>* (English)</span></strong></label>
                        <input required placeholder="Father Name * (English)" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Father Name <span>* (বাংলা)</span></strong></label>
                        <input required placeholder="Father Name * (বাংলা)" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Profession</strong></label>
                        <input placeholder="Profession" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Mobile Number <span>*</span></strong></label>
                        <input required placeholder="Mobile Number" type="tel" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Mother Name <span>* (English)</span></strong></label>
                        <input required placeholder="Father Name * (English)" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Mother Name <span>* (বাংলা)</span></strong></label>
                        <input required placeholder="Father Name * (বাংলা)" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Profession</strong></label>
                        <input placeholder="Profession" type="text" name=""/>
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Email </strong></label>
                        <input placeholder="Email Address" type="email" name=""/>
                    </div>


                    <h3 class="h3 text-info text-center text-decoration-underline">Present Address</h3>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>District Name <span>*</span></strong></label>
                        <input required placeholder="District Name" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Village Name <span>*</span></strong></label>
                        <input required placeholder="Village Name" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Thana <span>*</span></strong></label>
                        <input required placeholder="Thana" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Postal Code<span>*</span></strong></label>
                        <input required placeholder="Postal Code" type="text" name=""/>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md">
                        <label class="form-label"><strong>House Address<span>*</span></strong></label>
                        <textarea required name="" placeholder="House Address" id="" cols="30" rows="1"></textarea>
                        @error('student_type')
                        <span>{{ $message }}</span>
                        @enderror
                    </div>


                    <h3 class="h3 text-info text-center text-decoration-underline">Permanent Address</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="school_madrasa"
                               id="Same as Present Address">
                        <label class="form-check-label" for="Same as Present Address">
                            Same as Present Address
                        </label>
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>District Name </strong></label>
                        <input placeholder="District Name" type="text" name=""/>
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Village Name </strong></label>
                        <input placeholder="Village Name" type="text" name=""/>
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Thana </strong></label>
                        <input placeholder="Thana" type="text" name=""/>
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Postal Code</strong></label>
                        <input placeholder="Postal Code" type="text" name=""/>
                    </div>
                    <div class="col-md">
                        <label class="form-label"><strong>House Address</strong></label>
                        <textarea name="" placeholder="House Address" id="" cols="30" rows="1"></textarea>
                    </div>


                    <h3 class="h3 text-secondary text-center text-decoration-underline">Absence of Guardian Information</h3>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Name of guardian </strong></label>
                        <input placeholder="Name of guardian" type="text" name=""/>
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Relationship with guardian </strong></label>
                        <input placeholder="Relationship with guardian" type="text" name=""/>
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Occupation of Guardian </strong></label>
                        <input placeholder="Occupation of Guardian" type="text" name=""/>
                    </div>
                    <div class="col-md-6 p-3">
                        <label class="form-label"><strong>Income of Guardian</strong></label>
                        <input placeholder="Income of Guardian" type="text" name=""/>
                    </div>

                    <h3 class="h3 text-secondary text-center text-decoration-underline">Additional Information</h3>
                    <div class="col-md-12 p-3">
                        <label class="form-label"><strong>Previous Scholarship Organization (if any) </strong></label>
                        <input placeholder="Previous Scholarship Organization (if any)" type="text" name=""/>
                    </div>

                    <div class="text-end mt-4">
                        <input class="btn px-4 py-3 btn-outline-dark" type="submit" value="Go Next"/>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 text-white aside px-4 py-5">
                <div class="mb-5">
                    <h1 class="h3">Our Honourable Members</h1>
                    <div class="px-0">
                        <ul class="m-0 p-0">
                            <li class="d-flex justify-content-start align-items-center mb-4">
                              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                <ion-icon class="p-2" name="person"></ion-icon>
                              </span>
                                <span>Demo Demo</span>
                            </li>
                            <li class="d-flex align-items-center r mb-4">
                              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                                <ion-icon class="p-2" name="person"></ion-icon>
                              </span>
                                <span>Demo Demo</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-4">
                              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                               <ion-icon class="p-2" name="person"></ion-icon>
                              </span>
                                <span>Demo Demo</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-4">
                              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                               <ion-icon class="p-2" name="person"></ion-icon>
                              </span>
                                <span>Demo Demo</span>
                            </li>
                            <li class="d-flex justify-content-start align-items-center mb-4">
                              <span class="opacity-50 d-flex align-items-center me-3 fs-2">
                               <ion-icon class="p-2" name="person"></ion-icon>
                              </span>
                                <span>Demo Demo</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mb-5">
                    <h1 class="h3">Out Program Information</h1>
                    <p class="opacity-50 text-justify" style="text-align: justify;">
                        <small class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium assumenda aut beatae consectetur cupiditate, deserunt ducimus et eveniet facilis ipsa, iure minus molestias odit officiis pariatur quae repellendus sed tempore velit veniam voluptate voluptatibus? Adipisci aliquid architecto assumenda dolorum eos expedita fugit in ipsa itaque magnam minima modi nam nisi numquam odit ratione reiciendis tempore, temporibus totam vitae voluptates voluptatibus voluptatum? Accusamus adipisci animi asperiores delectus facere facilis hic, impedit incidunt iste perspiciatis praesentium quam saepe tempora tempore tenetur ullam, ut veniam voluptatem! Animi aperiam aspernatur eaque illum impedit incidunt magnam neque possimus quaerat quas reiciendis totam vel, voluptas?
                        </small>
                    </p>
                </div>

                <div class="mb-5">
                    <h1 class="h3">Our Contact Information</h1>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js"></script>

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
