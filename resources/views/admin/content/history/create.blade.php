@extends('admin.layouts.layoutMaster') @section('title', 'Create Isntitute')
@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection @section('content')
<div class="d-flex justify-content-between my-2">    
    <h4 class="fw-bold">
        @if ((@$history) ? @$history : @$data)
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{
        $sub_title ?? 'N/A' }}
        @endif
    </h4>    
    <a href="{{route('history.index')}}">
        <button class="btn btn-primary">➥ List</button></a>
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card mb-4">
            @if ((@$history) ? @$history : @$data)
            <div class="card-header d-flex justify-content-between align-items-center">
                @if(isset($history))
                    <h5 class="mb-0">Edit History</h5>
                @else
                    <h5 class="mb-0">Create History</h5>
                @endif
                <small class="text-muted float-end">Default label</small>
            </div>
            @endif
            <div class="card-body">
               @if ((@$history) ? @$history : @$data)
                <form method="post"
                    action="{{(@$history) ? route('history.update',$history->id) : route('history.store')}}"
                    enctype="multipart/form-data">
                    @csrf @if(isset($history)) @method('put') @endif

                    <div class="mb-3">
                        <label class="form-label" for="name">Title <code>*</code></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter History TIlte"
                            value="{{@$history->title ?? old('title')}}" />
                        @error('title')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Description <code>*</code></label>
                        <textarea name="description" class="form-control"  value="{{old('description')}}" id="" cols="30" rows="5" placeholder="Enter History Description">{{ @$history->description }}</textarea>
                        @error('description')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Button <code>*</code></label>
                        <input type="text" class="form-control" name="button" placeholder="Enter History Name"
                            value="{{@$history->button ?? old('button')}}" />
                        @error('button')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Button Link <code>*</code></label>
                        <input type="text" class="form-control" name="button_link" placeholder="Enter History Name"
                            value="{{@$history->button_link  ?? old('button_link')}}" />
                        @error('button_link')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="name">Upload Image <code>*</code></label>
                        <input type="file" class="form-control" name="image" placeholder="Enter History Name"
                            value="{{@$history->image}}" />
                        @error('image')
                        <code>*{{$message}}</code>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{(@$history)?'Update':'Submit'}}
                    </button>
                </form>
                @endif @if (isset($already_created))
                <div class="mt-4 mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="text-center mt-5 mb-4">
                <h1>{{ $already_created['title'] }}</h1>
                <p>{{ $already_created['sub_title'] }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection