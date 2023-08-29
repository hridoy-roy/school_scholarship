@extends('admin.layouts.layoutMaster')

@section('title', 'Validation - Forms')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
<script src="{{asset('assets/js/forms-editors.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
</h4>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">
                <form action="{{ route('exams.update',$exam->id) }}" method="POST" class="row g-3 needs-validation"
                    novalidate id="identifier">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <x-input :value='$exam->name' label='Name' :required=true placeholder='Write Your Exam Name'
                            name="name">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value='$exam->exam_date' label='Exam Date' type="date" :required=true
                            placeholder='Exam Date' name="exam_date">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input :value='$exam->exam_time' label='Exam Time' :required=true placeholder='Exam Time'
                            name="exam_time">
                        </x-input>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection