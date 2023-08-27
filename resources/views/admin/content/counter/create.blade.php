@extends('admin.layouts.layoutMaster')

@section('title', 'Create Isntitute')

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        @if ((@$counter) ? @$counter : @$data)
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
        @endif
    </h4>
    <a href="{{route('counter.index')}}"> <button class=" btn btn-primary">➥ List</button></a>
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card mb-4">
            @if ((@$counter) ? @$counter : @$data)
            <div class="card-header d-flex justify-content-between align-items-center">
                @if(isset($counter))
                <h5 class="mb-0">Edit Counter</h5>
                @else
                <h5 class="mb-0">Create Counter</h5>
                @endif
                <small class="text-muted float-end">Default label</small>
            </div>
            @endif
            <div class="card-body">
                @if ((@$counter) ? @$counter : @$data)
                <form method="post" action="{{(@$counter) ? route('counter.update',$counter->id) : route('counter.store')}}">
                    @csrf

                    @if(isset($counter))
                    @method('put')
                    @endif

                    <div class="row mb-3">
                        <div class="col-md">
                            <label class="form-label" for="name">Enter Counter Name <code>*</code></label>
                            <input type="text" class="form-control" name="total_applicant" placeholder="Enter Counter Name" value="{{@$counter->total_applicant ?? old('total_applicant')}}" />
                            @error('total_applicant')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="name">Enter Counter Number <code>*</code></label>
                            <input type="text" class="form-control" name="total_applicant_number" placeholder="Enter Counter Number" value="{{@$counter->total_applicant_number ?? old('total_applicant_number')}}" />
                            @error('total_applicant_number')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label class="form-label" for="name">Enter Counter Name <code>*</code></label>
                            <input type="text" class="form-control" name="total_scholarship" placeholder="Enter Counter Name" value="{{@$counter->total_scholarship ?? old('total_scholarship')}}" />
                            @error('total_scholarship')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="name">Enter Counter Number <code>*</code></label>
                            <input type="text" class="form-control" name="total_scholarship_number" placeholder="Enter Counter Number" value="{{@$counter->total_scholarship_number ?? old('total_scholarship_number')}}" />
                            @error('total_scholarship_number')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label class="form-label" for="name">Enter Counter Name <code>*</code></label>
                            <input type="text" class="form-control" name="total_school" placeholder="Enter Counter Name" value="{{@$counter->total_school ?? old('total_school')}}" />
                            @error('total_school')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="name">Enter Counter Number <code>*</code></label>
                            <input type="text" class="form-control" name="total_school_number" placeholder="Enter Counter Number" value="{{@$counter->total_school_number ?? old('total_school_number')}}" />
                            @error('total_school_number')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label class="form-label" for="name">Enter Counter Name <code>*</code></label>
                            <input type="text" class="form-control" name="total_exam_center" placeholder="Enter Counter Name" value="{{@$counter->total_exam_center ?? old('total_exam_center')}}" />
                            @error('total_exam_center')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="name">Enter Counter Number <code>*</code></label>
                            <input type="text" class="form-control" name="total_exam_center_number" placeholder="Enter Counter Number" value="{{@$counter->total_exam_center_number ?? old('total_exam_center_number')}}" />
                            @error('total_exam_center_number')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{(@$counter)?'Update':'Submit'}}
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