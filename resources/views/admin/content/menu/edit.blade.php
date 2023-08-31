@extends('admin.layouts.layoutMaster')

@section('title', 'Create Class')

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'Menu' }} /</span> {{ $sub_title ?? 'Edit' }}
    </h4>
    <a href="{{route('menu.list')}}"> <button class=" btn btn-primary">➥ List</button></a>
</div>
<div class="row">
    <!-- FormValidation -->

   <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{ $header ?? 'Edit' }}</h5>
            <div class="card-body">

                <form action="{{ route('menu.update', $menu->id) }}" method="POST" class="row g-3 needs-validation" novalidate
                    id="identifier" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('POST') --}}


                    <div class="col-md-6">
                        <label class="visually-hidden">Menu Name</label>
                        <input type="text" class="form-control" placeholder="Write Your Menu Name" name="name" value="{{$menu->name}}" >
                      
                    </div>


                    <div class="col-md-6">
                        <label class="visually-hidden">Status</label>

                        <select class="form-select" aria-label="Default select example" name="status" value="{{$menu->status}}">
                            <option selected>Status</option>
                            <option value="Enabled">Enabled</option>
                            <option value="Disabled">Disabled</option>
                        </select>
                    </div>

                    
                    <div class="col-md-6">
                        <label class="visually-hidden">Link</label>
                        <input type="text" class="form-control" placeholder="Write Your Link" name="link" value="{{$menu->link}}">
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
