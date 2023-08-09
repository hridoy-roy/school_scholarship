@extends('admin.layouts.layoutMaster')

@section('title', 'Validation - Forms')

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between">
    <h4 class="fw-bold mb-4">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{ route('classes.index') }}" class="btn btn-primary align-items-center waves-effect waves-light">
        List
    </a>
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">
                <form action="{{ route('classes.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('POST')
                    <!-- Account Details -->
                    <div class="col-md-6">
                        <x-input label='Name' :required=true placeholder='Write Your Class Name' name="name">
                        </x-input>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection
