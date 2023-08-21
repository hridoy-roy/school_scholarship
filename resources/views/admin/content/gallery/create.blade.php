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

    <a href="{{ route('gallery.list') }}" class="btn btn-primary align-items-center waves-effect waves-light">
        List
    </a>
</div>
<div class="row">
    <!-- FormValidation -->

    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">

                <form action="{{ route('gallery.store') }}" method="POST" class="row g-3 needs-validation" novalidate
                    id="identifier" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-md-6">
                        <x-input label='Title' :required=true placeholder='Write Your Title' name="title">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Sub Title' :required=true placeholder='Write Your Sub Title' name="sub_title">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Category' :required=true placeholder='Write Your Category' name="category">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Big Image' :required=true type='file' name="big_image">
                        </x-input>
                    </div>


                    <div class="col-md-6">
                        <x-input label='Small Image' :required=true type='file' name="small_image">
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
