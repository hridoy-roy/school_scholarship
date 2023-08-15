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

                <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" class="row g-3 needs-validation" novalidate
                    id="identifier" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('POST') --}}

                    <div class="col-md-6">
                        <x-input label='Title' :required=true placeholder='Write Your Title' name="title" value="{{$gallery->title}}">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Sub Title' :required=true placeholder='Write Your Sub Title' name="sub_title" value="{{$gallery->sub_title}}">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Category' :required=true placeholder='Write Your Category' name="category" value="{{$gallery->category}}">
                        </x-input>
                    </div>


                    <div class="col-md-6">
                        <x-input label='Small Image' :required=true type='file' name="small_image">
                        </x-input>
                    </div>

                    <div class="col-md-6">
                        <x-input label='Big Image' :required=true type='file' name="big_image">
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
