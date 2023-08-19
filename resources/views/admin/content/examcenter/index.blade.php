@extends('admin.layouts.layoutMaster')

@section('title', 'Exam Center')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('examcenter.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
</div>
<div class="card">
    <h5 class="card-header">Create Exam Center</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Capacity</th>
                    <th>Order By</th>
                    <th>Exam Center Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $sl=1
                @endphp

                @foreach($examcenters as $examcenter)
                <tr>
                    <td>{{$sl++}}</td>
                    <td>{{$examcenter->name}}</td>
                    <td>{{$examcenter->capacity}}</td>
                    <td>{{$examcenter->order_by}}</td>
                    <td><span class="badge bg-label-primary me-1">{{$examcenter->status == 1 ? 'Active' :
                            'Inactive'}}</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('examcenter.edit',$examcenter->id)}}"><i
                                        class="ti ti-pencil me-1"></i> Edit</a>
                                <a class="dropdown-item" href="{{route('student.assign',$examcenter->id)}}"><i
                                        class="ti ti-pencil me-1"></i> Assing Student</a>
                                <a class="dropdown-item" href="{{route('student.assign.result',$examcenter->id)}}"><i
                                        class="ti ti-pencil me-1"></i> Result Student</a>
                                <form method="post" id="{{'form_'.$examcenter->id}}"
                                    action="{{route('examcenter.destroy',$examcenter->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item" data-id="{{$examcenter->id}}"><i
                                            class="ti ti-trash me-1"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
