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

<div class="d-flex justify-content-between">
    <h4 class="fw-bold mb-4">

        <span class="text-muted fw-light">{{ $title ?? 'Slider' }} /</span> {{ $sub_title ?? 'Create' }}

    </h4>

    <a href="{{ route('slider.list') }}" class="btn btn-primary align-items-center waves-effect waves-light">
        List
    </a>
</div>
<div class="row">
    <!-- FormValidation -->

    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'Create' }}</h5>
            <div class="card-body">

                <form action="{{route('slider.store')}}" method="POST" class="row g-3 needs-validation" novalidate
                    id="identifier" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                

                    <div class="col-md-6">
                        <x-input label='Sub Title' :required=true placeholder='Write Your Sub Title' name="sub_title" >
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Title' :required=true placeholder='Write Your Title' name="title">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Description' :required=true placeholder='Write Your Description' name="description">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Link one' :required=true placeholder='Write Your Link' name="link1">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Link one' :required=true placeholder='Write Your Link' name="link2">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Background Image' :required=true type='file' name="bg_img">
                        </x-input>
                    </div>



                    {{-- <div class="col-md-6">
                        <x-input label='Logo' :required=true type='file' name="logo">
                        </x-input>
                    </div>


                    <div class="col-md-6">
                        <x-input label='Favicon' :required=true type='file' name="favicon">
                        </x-input>
                    </div> --}}

                  

                    <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- /FormValidation -->
</div>
@endsection
