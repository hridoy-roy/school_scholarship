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
    <h5 class="card-header">
        <span class="badge bg-success bg-glow">Center Name :{{ $exam_center->name }}</span>
        <span class="badge bg-danger bg-glow">Total Capacity :{{ $exam_center->capacity }}</span>
        <span class="badge bg-primary bg-glow">Total Assing :{{ $exam_center->students?->count() }}</span>
        <span class="badge bg-warning bg-glow">Available Sit :{{ $exam_center->capacity -
            $exam_center->students?->count()
            }}</span>
    </h5>
    <form action="{{ route('students.assign',$exam_center->id) }}" method="post">
        @csrf
        <button class="btn btn-secondary create-new btn-primary">Save</button>
    </form>
    <form action="{{ route('students.assign',$exam_center->id) }}" method="post">
        @csrf
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Reg. No</th>
                        <th>Roll</th>
                        <th>Father Name</th>
                        <th>DOB</th>
                        <th>Mobile</th>
                        <th>Check Box</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>234234</td>
                        <td>234234</td>
                        <td>234234</td>
                        <td>234234</td>
                        <td>23423</td>
                        <td>23423</td>
                        <td>234234</td>
                        <td>
                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                name="student_id[]" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>234234</td>
                        <td>234234</td>
                        <td>234234</td>
                        <td>234234</td>
                        <td>23423</td>
                        <td>23423</td>
                        <td>234234</td>
                        <td>
                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox"
                                name="student_id[]" value="2">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="7"></th>
                        <th colspan="2">
                            <button class="btn btn-secondary create-new btn-primary">Save</button>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </form>
</div>
<!--/ Select -->



@endsection
