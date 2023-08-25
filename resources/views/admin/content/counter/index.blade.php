@extends('admin.layouts.layoutMaster')

@section('title', 'Counter')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    @if (isset($counter))
    <a href="{{route('counter.edit',$counter->id)}}"> <button class=" btn btn-primary">➥ Edit</button></a>
    @else
    <a href="{{route('counter.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
    @endif
</div>
<div class="card">
    <h5 class="card-header">Create Institute</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Total Applicant</th>
            <th>Total Applicant Number</th>
            <th>Total Scholarship</th>
            <th>Total Scholarship Number</th>
            <th>Total School</th>
            <th>Total School Number</th>
            <th>Total Exam Center</th>
            <th>Total Exam Center Number</th>
            
            <th>Action</th>
            </tr>
        </thead>
        @if (isset($counter))
            <tbody>
            @php 
            $sl=1 
            @endphp
            <tr>
            <td>{{$sl++}}</td>
            <td>{{@$counter->total_applicant}}</td>
            <td><span class="badge bg-label-primary me-1">{{@$counter->total_applicant_number}}</span></td>
            <td>{{@$counter->total_scholarship}}</td>
            <td><span class="badge bg-label-primary me-1">{{@$counter->total_scholarship_number}}</span></td>
            <td>{{$counter->total_school}}</td>
            <td><span class="badge bg-label-primary me-1">{{@$counter->total_school_number}}</span></td>
            <td>{{@$counter->total_exam_center}}</td>
            <td><span class="badge bg-label-primary me-1">{{@$counter->total_exam_center_number}}</span></td>
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="ti ti-dots-vertical"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('counter.edit',$counter->id)}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                    <form method="post" id="{{'form_'.$counter->id}}" action="{{route('counter.destroy',$counter->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" data-id="{{$counter->id}}"><i class="ti ti-trash me-1"></i> Delete</button>
                    </form>
                </div>
                </div>
            </td>
            </tr>
        </tbody>
        @endif
        
        <tfoot class="table-border-bottom-0">
            <tr>
            <th class="rounded-start-bottom">ID</th>
            <th>Total Applicant</th>
            <th>Total Applicant Number</th>
            <th>Total Scholarship</th>
            <th>Total Scholarship Number</th>
            <th>Total School</th>
            <th>Total School Number</th>
            <th>Total Exam Center</th>
            <th>Total Exam Center Number</th>
            <th class="rounded-end-bottom">Actions</th>
            </tr>
        </tfoot>
        </table>          
    </div>
</div>
@endsection

