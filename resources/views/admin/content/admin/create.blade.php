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
                <form action="{{ route('users.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('POST')
                    <!-- Account Details -->
                    <div class="mb-3">
                        <x-input label='Name' type="name" :required=true placeholder='Enter your Name' name="name">
                        </x-input>
                    </div>
                    <div class="mb-3">
                        <x-input label='Email' type="email" :required=true placeholder='Enter your email' name="email">
                        </x-input>
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <x-input label='Password' type="password" :required=true placeholder='Password' name="password">
                        </x-input>
                    </div>

                    <div class="mb-3 form-password-toggle">
                        <x-input label='Confirm Password' type="password" :required=true
                            placeholder='Password Confirmation' name="password_confirmation">
                        </x-input>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_admin" name="is_admin">
                            <label class="form-check-label" for="is_admin">
                                Is Super Admin
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Create Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection
