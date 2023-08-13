@extends('admin.layouts.layoutMaster')

@section('title', 'Create Isntitute')

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('examcenter.index')}}"> <button class=" btn btn-primary">➥ List</button></a>
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                @if(isset($center))
                <h5 class="mb-0">Edit Exam Center</h5>
                @else
                <h5 class="mb-0">Create Exam Center</h5>
                @endif
                <small class="text-muted float-end">Exam Center Form</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{(@$center) ? route('examcenter.update',$center->id) : route('examcenter.store')}}">
                    @csrf

                    @if(isset($center))
                    @method('put')
                    @endif

                    <div class="mb-3">
                        <label class="form-label" for="name">Exam Center Name <code>*</code></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Exam Center Name" value="{{@$center->name}}" />
                        @error('name')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Exam Center Capacity <code>*</code></label>
                        <input type="text" class="form-control" name="capacity" placeholder="Enter Exam Center Capacity" value="{{@$center->capacity}}" />
                        @error('name')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="order_by">Exam Center Serial</label>
                        <input type="text" class="form-control" name="order_by" id="basic-default-company" value="{{@$center->order_by}}" placeholder="Enter Exam Center Serial" />
                        @error('order_by')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="status">Exam Center Status <code>*</code></label>
                        <select class="form-control" name="status">
                            @if(isset($center))
                            <option value="{{$center->status}}">
                                {{$center->status == 1 ? 'Active' : 'Inactive'}}
                            </option>
                            @else
                            <option value=" ">Select</option>
                            @endif
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{(@$center)?'Update':'Submit'}}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection