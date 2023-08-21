@extends('admin.layouts.layoutMaster')

@section('title', 'History')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('history.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
</div>
<div class="card">
    <h5 class="card-header">Create Institute</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>                      
            <th>Button</th>
            <th>Button Link</th>
            <th>Action</th>
            </tr>
        </thead> 
        @if (isset($history))
            <tbody>
            @php 
            $sl=1 
            @endphp
            <tr>
            <td>{{$sl++}}</td>
            <td>{{$history->title}}</td>
            <td>{{$history->description}}</td>
            <td>{{$history->button}}</td>
            <td>{{$history->button_link}}</td>
            <td><img src="{{$history->image}}" alt="" style="width: 100px"></td>
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="ti ti-dots-vertical"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('history.edit',$history->id)}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                     <form method="post" id="{{'form_'.$history->id}}" action="{{route('history.destroy',$history->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" data-id="{{$history->id}}"><i class="ti ti-trash me-1"></i> Delete</button>
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
            <th>Title</th>
            <th>Description</th>                      
            <th>Button</th>
            <th>Button Link</th>
            <th>Action</th>
            <th class="rounded-end-bottom">Actions</th>
            </tr>
        </tfoot>
        </table>          
    </div>
</div>
@endsection

