@extends('admin.layouts.layoutMaster')

@section('title', 'Create Area')

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('areas.index')}}"> <button class=" btn btn-primary">➥ List</button></a>
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                @if(isset($area))
                <h5 class="mb-0">Edit Area</h5>
                @else
                <h5 class="mb-0">Create Area</h5>
                @endif
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{(@$area) ? route('areas.update',$area->id) : route('areas.store')}}">
                    @csrf

                    @if(isset($area))
                    @method('put')
                    @endif

                    <div class="mb-3">
                        <label class="form-label" for="name">Area Name <code>*</code></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Area Name" value="{{@$area->name ?? old('name')}}" />
                        @error('name')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="order_by">Area Serial</label>
                        <input type="text" class="form-control" name="order_by" id="basic-default-company" value="{{@$area->order_by ?? old('order_by')}}" placeholder="Enter Areas Serial" />
                        @error('order_by')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="status">Area Status <code>*</code></label>
                        <select class="form-control" name="status">
                            @if(isset($area))
                            <option value="{{$area->status}}">
                                {{$area->status == 1 ? 'Active' : 'Inactive'}}
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
                        {{(@$area)?'Update':'Submit'}}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection
