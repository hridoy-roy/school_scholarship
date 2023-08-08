@extends('admin.layouts.commonMaster' )

@section('title', 'Login Cover - Pages')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth.js')}}"></script>
@endsection

@section('layoutContent')
<div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">

        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 p-0">
            <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/img/illustrations/auth-register-illustration-light.png') }}"
                    alt="auth-register-cover" class="img-fluid my-5 auth-illustration"
                    data-app-light-img="illustrations/auth-register-illustration-light.png"
                    data-app-dark-img="illustrations/auth-register-illustration-dark.png">

                <img src="{{ asset('assets/img/illustrations/bg-shape-image-light.png') }}" alt="auth-register-cover"
                    class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png"
                    data-app-dark-img="illustrations/bg-shape-image-dark.png">
            </div>
        </div>
        <!-- /Left Text -->

        <!-- Register -->
        <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
            <div class="w-px-400 mx-auto">
                <!-- Logo -->
                <div class="app-brand mb-4">
                    <a href="{{url('/')}}" class="app-brand-link gap-2">
                        <span
                            class="app-brand-logo demo">@include('admin._partials.macros',["height"=>20,"withbg"=>'fill:
                            #fff;'])</span>
                    </a>
                </div>
                <!-- /Logo -->
                <h3 class="mb-1 fw-bold">Adventure starts here 🚀</h3>
                <p class="mb-4">Make your app management easy and fun!</p>

                <form class="mb-3" id="formAuthentication" method="POST" action="{{ route('register') }}">
                    @csrf
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
                    <button class="btn btn-primary d-grid w-100">
                        Sign up
                    </button>
                </form>

                <p class="text-center">
                    <span>Already have an account?</span>
                    <a href="{{route('login')}}">
                        <span>Sign in instead</span>
                    </a>
                </p>

                <div class="divider my-4">
                    <div class="divider-text">or</div>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                        <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
                    </a>

                    <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                        <i class="tf-icons fa-brands fa-google fs-5"></i>
                    </a>

                    <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                        <i class="tf-icons fa-brands fa-twitter fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>

@endsection
