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
                <form action="{{ route('blogs.update',$blog->slug) }}" method="POST" class="row g-3 needs-validation"
                    novalidate id="identifier" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <x-input :value='$blog->title' label='Title' :required=true placeholder='Write Your Blog Name'
                            name="title">
                        </x-input>
                    </div>
                    <div class="col-md-6">
                        <x-input label='Blog Banner' type='file' name="banner">
                        </x-input>
                    </div>
                    <div class="col-12">
                        <div class="card mb-4">
                            <h5 class="card-header">Snow Theme</h5>
                            <div class="card-body">
                                <div id="snow-toolbar">
                                    <span class="ql-formats">
                                        <select class="ql-font"></select>
                                        <select class="ql-size"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                        <button class="ql-strike"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <select class="ql-color"></select>
                                        <select class="ql-background"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-script" value="sub"></button>
                                        <button class="ql-script" value="super"></button>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-header" value="1"></button>
                                        <button class="ql-header" value="2"></button>
                                        <button class="ql-blockquote"></button>
                                        <button class="ql-code-block"></button>
                                    </span>
                                </div>
                                <div id="snow-editor">
                                    {!! $blog->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <textarea name="body" style="display:none" id="hiddenArea"></textarea>
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
