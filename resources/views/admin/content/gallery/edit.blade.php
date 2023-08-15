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
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                @if(isset($class))
                <h5 class="mb-0">Edit Class</h5>
                @else
                <h5 class="mb-0">Create Class</h5>
                @endif
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{(@$class) ? route('classes.update',$class->id) : route('classes.store')}}">
                    @csrf

                    @if(isset($class))
                    @method('put')
                    @endif

                    <div class="mb-3">
                        <label class="form-label" for="name">Class Name <code>*</code></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Class Name" value="{{@$class->name}}" />
                        @error('name')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="order_by">Class Serial</label>
                        <input type="text" class="form-control" name="order_by" id="basic-default-company" value="{{@$class->order_by}}" placeholder="Enter Category Serial" />
                        @error('order_by')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="status">Class Status <code>*</code></label>
                        <select class="form-control" name="status">
                            @if(isset($class))
                            <option value="{{$class->status}}">
                                {{$class->status == 1 ? 'Active' : 'Inactive'}}
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
                        {{(@$class)?'Update':'Submit'}}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection
