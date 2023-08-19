@extends('admin.layouts.layoutMaster')

@section('title', 'Student')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('students.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
</div>
<div class="card">
    <h5 class="card-header">Create Student</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>School</th>                      
            <th>Class</th>
            <th>Class Roll</th>
            <th>Subject</th>                      
            <th>Section</th>
            <th>Institute Type</th>
            <th>Student Type</th>                      
            <th>Area</th>
            <th>Date of Birth</th>
            <th>Blood Group</th>                      
            <th>Father Name</th>
            <th>Profession</th>
            <th>Mother Name</th>                      
            <th>Profession</th>
            <th>Present House Adress</th>
            <th>Division Name</th>                      
            <th>Village Name</th>
            <th>Select Thana</th>
            <th>Postal Code</th>
            <th>Permanent House Adress</th>
            <th>Mobile Number</th>
            <th>Facebook</th>
            <th>Email</th>
            <th>Name of guardian</th>
            <th>Relationship with guardian</th>
            <th>Occupation of Guardian</th>
            <th>Income of Guardian</th>
            <th>Previous Scholarship Organization</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php 
            $sl=1 
            @endphp

            @foreach($students as $student)
            <tr>
            <td>{{$sl++}}</td>
            <td><img src="{{asset($student->image)}}" alt="" style="width: 70px; height:80px; object-fit:cover"></td>
            <td>{{$student->name_bn}}</td>
            <td>{{$student->institute->name}}</td>
            <td>{{$student->student_class->name}}</td>
            <td>{{$student->class_roll}}</td>
            <td>{{$student->class_division}}</td>
            <td>{{$student->class_section}}</td>
            <td>{{$student->school_madrasa}}</td>
            <td>{{$student->student_type}}</td>
            <td>{{$student->area}}</td>
            <td>{{$student->dob}}</td>
            <td>
                @if ($student->blood_group  == 1 )
                    A+
                @elseif ($student->blood_group  == 2 )
                    B+
                @elseif ($student->blood_group  == 3 )
                    O+
                @elseif ($student->blood_group  == 4 )
                    AB+
                @elseif ($student->blood_group  == 5 )
                    A-
                @elseif ($student->blood_group  == 6 )
                    B-
                @elseif ($student->blood_group  == 6 )
                    O-
                @elseif ($student->blood_group  == 6 )
                    B-
                @else
                    AB-
                @endif
            </td>
            <td>{{$student->father_name_en}}</td>
            <td>{{$student->father_occupation}}</td>
            <td>{{$student->mother_name_en}}</td>
            <td>{{$student->mother_occupation}}</td>
            <td>{{$student->present_address}}</td>
            <td>{{$student->permanent_address_district}}</td>
            <td>{{$student->permanent_address_village}}</td>
            <td>{{$student->permanent_address_thana}}</td>
            <td>{{$student->permanent_address_post_office}}</td>
            <td>{{$student->permanent_address}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->facebook}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->absent_of_parent_name}}</td>
            <td>{{$student->absent_of_parent_relation}}</td>
            <td>{{$student->absent_of_parent_occupation}}</td>
            <td>{{$student->absent_of_parent_annual_earning}}</td>
            <td>{{$student->previous_scholarship_name_group}}</td>
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="ti ti-dots-vertical"></i>
                </button>
                <div class="dropdown-menu">
                    <a href="{{route('students.show',$student->id)}}"><button class="btn btn-sm btn-info"><i class="fa-solid fa-eye "></i></button></a> 
                    <a class="dropdown-item" href="{{route('students.edit',$student->id)}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                    <form method="post" id="{{'form_'.$student->id}}" action="{{route('students.destroy',$student->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" data-id="{{$student->id}}"><i class="ti ti-trash me-1"></i> Delete</button>
                    </form>
                </div>
                </div>
            </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot class="table-border-bottom-0">
            <tr>
            <th class="rounded-start-bottom">ID</th>
            <th>Name</th>
            <th>School</th>                      
            <th>Class</th>
            <th>Class Roll</th>
            <th>Subject</th>                      
            <th>Section</th>
            <th>Institute Type</th>
            <th>Student Type</th>                      
            <th>Area</th>
            <th>Date of Birth</th>
            <th>Blood Group</th>                      
            <th>Father Name</th>
            <th>Profession</th>
            <th>Mother Name</th>                      
            <th>Profession</th>
            <th>Present House Adress</th>
            <th>Division Name</th>                      
            <th>Village Name</th>
            <th>Select Thana</th>
            <th>Postal Code</th>
            <th>Permanent House Adress</th>
            <th>Mobile Number</th>
            <th>Facebook</th>
            <th>Email</th>
            <th>Relationship with guardian</th>
            <th>Occupation of Guardian</th>
            <th>Income of Guardian</th>
            <th>Previous Scholarship Organization</th>
            <th>Image</th>
            <th class="rounded-end-bottom">Actions</th>
            </tr>
        </tfoot>
        </table>          
    </div>
</div>
@endsection

