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
    @if (auth()->user()->is_admin == 1)
    <a href="{{ route('users.index') }}" class="btn btn-primary align-items-center waves-effect waves-light">
        List
    </a>
    @endif
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">
                <form action="{{ route('password.update') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    @method('put')
                    <!-- Account Details -->
                    <div class="mb-3">
                        <x-input label='Current Password' type="password" :required=true placeholder='Current Password'
                            name="current_password">
                        </x-input>
                    </div>
                    <div class="mb-3">
                        <x-input label='New Password' type="password" :required=true placeholder='New Password'
                            name="password">
                        </x-input>
                    </div>
                    <div class="mb-3">
                        <x-input label='Confirm Password' type="password" :required=true placeholder='Confirm Password'
                            name="password_confirmation">
                        </x-input>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection