@extends('frontend.layouts.main')

@section('main-container')
<table class="table" style="margin:100px auto;width:900px">
    <tbody>
        <tr>
            <th>Image</th>
            <td><img src="{{asset('upload/profile/'.$student->image)}}" style="height:200px;object-fit:cover;"
                    alt="{{$student->title}}"></td>
        </tr>
        <tr>
            <th style="width:200px">Name</th>
            <td style="width:200px">{{$student->name_en}}</td>
            <th style="width:200px">Father Name</th>
            <td style="width:200px">{{$student->father_name_en}}</td>
        </tr>
        <tr>
            <th style="width:200px">School Name</th>
            <td>{{$student->institute->name}}</td>
            <th style="width:200px">Profession</th>
            <td style="width:200px">{{$student->father_occupation}}</td>
        </tr>
        <tr>
            <th style="width:200px">Class Name</th>
            <td style="width:200px">{{$student->student_class->name}}</td>
            <th style="width:200px">Mother Name</th>
            <td style="width:200px">{{$student->mother_name_en}}</td>
        </tr>
        <tr>
            <th style="width:200px">Class Roll</th>
            <td style="width:200px">{{$student->class_roll}}</td>
            <th style="width:200px">Profession</th>
            <td style="width:200px">{{$student->mother_occupation}}</td>
        </tr>
        <tr>
            <th style="width:200px">Subject</th>
            <td style="width:200px">{{$student->class_division}}</td>
            <th style="width:200px">Present House Adress</th>
            <td style="width:200px">{{$student->present_address}}</td>
        </tr>
        <tr>
            <th style="width:200px">Section</th>
            <td style="width:200px">{{$student->class_section}}</td>
            <th style="width:200px">Division Name</th>
            <td style="width:200px">{{$student->permanent_address_district}}</td>
        </tr>
        <tr>
            <th style="width:200px">Institute Type</th>
            <td style="width:200px">{{$student->school_madrasa}}</td>
            <th style="width:200px">Village Name</th>
            <td style="width:200px">{{$student->permanent_address_village}}</td>
        </tr>
        <tr>
            <th style="width:200px">Student Type</th>
            <td style="width:200px">{{$student->student_type}}</td>
            <th style="width:200px">Select Thana</th>
            <td style="width:200px">{{$student->permanent_address_thana}}</td>
        </tr>
        <tr>
            <th style="width:200px">Area</th>
            <td style="width:200px">{{$student->area}}</td>
            <th style="width:200px">Postal Code</th>
            <td style="width:200px">{{$student->permanent_address_post_office}}</td>
        </tr>
        <tr>
            <th style="width:200px">Date of Birth</th>
            <td style="width:200px">{{$student->dob}}</td>
            <th style="width:200px">Permanent House Adress</th>
            <td style="width:200px">{{$student->permanent_address}}</td>
        </tr>
        <tr>
            <th style="width:200px">Blood Group</th>
            <td style="width:200px">
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
            </td>
            <th style="width:200px">Name of guardian</th>
            <td style="width:200px">{{$student->absent_of_parent_name}}</td>
        </tr>
        <tr>
            <th style="width:200px">Mobile Number</th>
            <td style="width:200px">{{$student->mobile}}</td>
            <th style="width:200px">Relationship with guardian</th>
            <td style="width:200px">{{$student->absent_of_parent_relation}}</td>
        </tr>
        <tr>
            <th style="width:200px">Facebook</th>
            <td style="width:200px">{{$student->facebook}}</td>
            <th style="width:200px">Occupation of Guardian</th>
            <td style="width:200px">{{$student->absent_of_parent_occupation}}</td>
        </tr>
        <tr>
            <th style="width:200px">Email</th>
            <td style="width:200px">{{$student->email}}</td>
            <th style="width:200px">Income of Guardian</th>
            <td style="width:200px">{{$student->absent_of_parent_annual_earning}}</td>
        </tr>
        <tr>
            <th style="width:200px">Previous Scholarship Organization</th>
            <td style="width:200px">{{$student->previous_scholarship_name_group}}</td>
        </tr>
        <tr>
            <td style="width:200px">
                <a href="{{route('students.edit',$student->id)}}"><button class="btn btn-primary">➥ Edit</button></a>
            </td>
            <td style="width:200px">
                <a href="#"> <button class=" btn btn-primary">➥ Payment</button></a>
            </td>
        </tr>
    </tbody>
</table>
@endsection