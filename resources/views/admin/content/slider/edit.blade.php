@extends('admin.layouts.layoutMaster')

@section('title', 'Create Class')

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('classes.index')}}"> <button class=" btn btn-primary">➥ List</button></a>
</div>
<div class="row">
    <!-- FormValidation -->

   <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
            <div class="card-body">

                <form action="{{ route('slider.update', $slider->id) }}" method="POST" class="row g-3 needs-validation" novalidate
                    id="identifier" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('POST') --}}

                    <div class="col-md-6">
                        <x-input label='Sub Title' :required=true placeholder='Write Your Sub Title' name="sub_title" value="{{$slider->sub_title}}">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Title' :required=true placeholder='Write Your Title' name="title" value="{{$slider->title}}">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Description' :required=true placeholder='Write Your description' name="description" value="{{$slider->description}}">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='link one' :required=true placeholder='Write Your link' name="link1" value="{{$slider->link1}}">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='link one' :required=true placeholder='Write Your link' name="link2" value="{{$slider->link2}}">
                        </x-input>
                    </div>


                    <div class="col-md-6">
                        <x-input label='Logo' :required=true type='file' name="logo">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Favicon' :required=true type='file' name="favicon">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Background Image' :required=true type='file' name="bg_img">
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
