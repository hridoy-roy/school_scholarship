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
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<!-- Flat Picker -->
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<!-- Form Validation -->
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/tables-datatables-basic.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
</div>

<!-- Select -->
<div class="card">
    <h5 class="card-header text-center w-100">
        <span class="badge bg-success bg-glow">Center Name :{{ $exam_center->name }}</span>
        <span class="badge bg-danger bg-glow">Total Capacity :{{ $exam_center->capacity }}</span>
        <span class="badge bg-primary bg-glow">Total Assing :{{ $exam_center->students?->count() }}</span>
        <span class="badge bg-warning bg-glow">Available Sit :{{ $exam_center->capacity -
            $exam_center->students?->count()
            }}</span>
    </h5>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($exam_center->students as $student)
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/ Select -->



@endsection
