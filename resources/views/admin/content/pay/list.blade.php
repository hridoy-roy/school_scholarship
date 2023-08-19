@extends('admin.layouts.layoutMaster')

@section('title', 'Exam Center')



@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
<!-- Form Validation -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<!-- Flat Picker -->
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<!-- Form Validation -->
<script src="{{asset('assets/vendor/libs/form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/form-validation/umd//plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/tables-datatables-basic.js')}}"></script>
@endsection


@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('examcenter.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
</div>

<!-- Select -->
<div class="card">
    <form action="{{ route('student.pay.view') }}" method="get">
        @csrf
        <div class="row  align-items-end">
            <div class="col-md-4">
                <h5 class="card-header">{{ $header ?? 'N/A' }} </h5>
            </div>
            <div class="col-md-3">
                <label class="form-label" for="multicol-birthdate">Select Year</label>
                <select name="year" id="year" class="form-select">
                    @foreach ($years as $year)
                    <option value="{{ $year }}" {{ ($year==$currentYear) ? "selected" : '' }}> {{ $year }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5">
                <button class="btn btn-warning">Search</button>
            </div>
        </div>
    </form>
    <form action="{{ route('student.pay.store') }}" method="post">
        @csrf
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo & Name</th>
                        <th>Reg. No</th>
                        <th>Roll</th>
                        <th>Father Name</th>
                        <th>Reg. Date</th>
                        <th>Mobile</th>
                        <th>Pay Status</th>
                        <th>Check For Paid</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ ++$loop->index }}</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar me-2">
                                        <img src="{{ asset('upload/profile/'.$student->image) }}" alt="Avatar"
                                            class="rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="emp_name text-truncate">{{ $student->name_en }}</span>
                                    <small class="emp_post text-truncate text-muted">{{ $student->name_bn }}</small>
                                </div>
                            </div>
                        </td>
                        <td>{{ $student->registration_no }}</td>
                        <td>{{ $student->roll_no ?? 'Not Set' }}</td>
                        <td>{{ $student->father_name_en }}</td>
                        <td>{{ $student->created_at->format('d.m.Y') }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>
                            @if ($student->payment_status === 'unpaid')
                            <span class="badge bg-label-danger me-1">Unpaid</span>
                            @else
                            <span class="badge bg-label-success me-1">Paid</span>
                            @endif
                        </td>
                        <td>
                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                name="student_id[]" value="{{ $student->id }}" @if(is_array(old('student_id')) &&
                                in_array(1, old('student_id'))) checked @endif>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7"></th>
                        <th colspan="2"><button class="btn btn-secondary create-new btn-primary">Save</button></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </form>
</div>
<!--/ Select -->



@endsection