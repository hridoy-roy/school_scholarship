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

        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}

    </h4>

    <a href="{{ route('slider.list') }}" class="btn btn-primary align-items-center waves-effect waves-light">
        List
    </a>
</div>
<div class="row">
    <!-- FormValidation -->

    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">

                <form action="{{route('slider.store')}}" method="POST" class="row g-3 needs-validation" novalidate
                    id="identifier" enctype="multipart/form-data">

                    @csrf
                    {{ method_field('PUT')}}

                

                    <div class="col-md-6">
                        <x-input id="sub_title" type="text" label='Sub Title' :required=true placeholder='Write Your Sub Title' name="sub_title">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input id="title" type="text" label='Title' :required=true placeholder='Write Your Title' name="title">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input id="description" type="text" label='Description' :required=true placeholder='Write Your Description' name="description">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input id="link1" type="text" label='Link one' :required=true placeholder='Write Your Link' name="link1">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input id="link2" type="text" label='Link one' :required=true placeholder='Write Your Link' name="link2">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input id="Logo" label='Logo' :required=true type='file' name="logo">
                        </x-input>
                    </div>


                    <div class="col-md-6">
                        <x-input id="favicon" label='Favicon' :required=true type='file' name="favicon">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input id="bg_img" label='Background Image' :required=true type='file' name="bg_img">
                        </x-input>
                    </div>
                  
                  

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
