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
    <a href="{{route('history.index')}}"> <button class=" btn btn-primary">➥ List</button></a>
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                @if(isset($history))
                <h5 class="mb-0">Edit History</h5>
                @else
                <h5 class="mb-0">Create History</h5>
                @endif
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{(@$history) ? route('history.update',$history->id) : route('history.store')}}"  enctype="multipart/form-data">
                    @csrf

                    @if(isset($history))
                    @method('put')
                    @endif

                    <div class="mb-3">
                        <label class="form-label" for="name">Title <code>*</code></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter History TIlte" value="{{@$history->title}}" />
                        @error('title')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Description <code>*</code></label>
                        <input type="text" class="form-control" name="description" placeholder="Enter History Description" value="{{@$history->description}}" />
                        @error('description')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Button <code>*</code></label>
                        <input type="text" class="form-control" name="button" placeholder="Enter History Name" value="{{@$history->button}}" />
                        @error('button')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Button Link <code>*</code></label>
                        <input type="text" class="form-control" name="button_link" placeholder="Enter History Name" value="{{@$history->button_link}}" />
                        @error('button_link')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Upload Image <code>*</code></label>
                        <input type="file" class="form-control" name="image" placeholder="Enter History Name" value="{{@$history->image}}" />
                        @error('image')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>

                    
                    <button type="submit" class="btn btn-primary">
                        {{(@$history)?'Update':'Submit'}}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection