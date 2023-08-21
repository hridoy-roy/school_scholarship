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
    <a href="{{route('counter.index')}}"> <button class=" btn btn-primary">➥ List</button></a>
</div>
<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                @if(isset($counter))
                <h5 class="mb-0">Edit Counter</h5>
                @else
                <h5 class="mb-0">Create Counter</h5>
                @endif
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{(@$counter) ? route('counter.update',$counter->id) : route('counter.store')}}">
                    @csrf

                    @if(isset($counter))
                    @method('put')
                    @endif

                    <div class="row mb-3">
                        <div class="col-md">
                            <label class="form-label" for="name">Total Applicant <code>*</code></label>
                            <input type="text" class="form-control" name="total_applicant" placeholder="Enter Counter Name" value="{{@$counter->total_applicant}}" />
                            @error('total_applicant')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="name">Total Applicant Number <code>*</code></label>
                            <input type="text" class="form-control" name="total_applicant_number" placeholder="Enter Counter Name" value="{{@$counter->total_applicant_number}}" />
                            @error('total_applicant_number')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label class="form-label" for="name">Total Scholarship <code>*</code></label>
                            <input type="text" class="form-control" name="total_scholarship" placeholder="Enter Counter Name" value="{{@$counter->total_scholarship}}" />
                            @error('total_scholarship')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="name">Total Scholarship Number <code>*</code></label>
                            <input type="text" class="form-control" name="total_scholarship_number" placeholder="Enter Counter Name" value="{{@$counter->total_scholarship_number}}" />
                            @error('total_scholarship_number')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label class="form-label" for="name">Total School <code>*</code></label>
                            <input type="text" class="form-control" name="total_school" placeholder="Enter Counter Name" value="{{@$counter->total_school}}" />
                            @error('total_school')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="name">Total School Number <code>*</code></label>
                            <input type="text" class="form-control" name="total_school_number" placeholder="Enter Counter Name" value="{{@$counter->total_school_number}}" />
                            @error('total_school_number')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label class="form-label" for="name">Total Exam Center <code>*</code></label>
                            <input type="text" class="form-control" name="total_exam_center" placeholder="Enter Counter Name" value="{{@$counter->total_exam_center}}" />
                            @error('total_exam_center')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                        <div class="col-md">
                            <label class="form-label" for="name">Total Exam Center Number <code>*</code></label>
                            <input type="text" class="form-control" name="total_exam_center_number" placeholder="Enter Counter Name" value="{{@$counter->total_exam_center_number}}" />
                            @error('total_exam_center_number')
                            <code>*{{$message}}</code>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{(@$counter)?'Update':'Submit'}}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /FormValidation -->
</div>
@endsection