@extends('admin.layouts.layoutMaster')

@section('title', 'Class')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('menu.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
</div>
<div class="card">
    <h5 class="card-header">Create Menu</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Menu Name</th>
            <th>Status</th>
            <th>Link</th>                      
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php 
            $sl=1 
            @endphp

            @foreach($menus as $menu)
            <tr>
            <td>{{$sl++}}</td>
            <td>{{$menu->name}}</td>
            <td>{{$menu->status}}</td>
            <td>{{$menu->link}}</td>
           

           

            <td><span class="badge bg-label-primary me-1">{{$menu->status == 1 ? 'Active' : 'Inactive'}}</span></td>
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="ti ti-dots-vertical"></i>
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('menu.edit',$menu->id)}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                    <form method="post" id="{{'form_'.$menu->id}}" action="{{route('menu.destroy',$menu->id)}}">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" data-id="{{$menu->id}}"><i class="ti ti-trash me-1"></i> Delete</button>
                        
                    </form>
                </div>
                </div>
            </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot class="table-border-bottom-0">
            <tr>
            <th class="rounded-start-bottom">ID</th>
            <th>Menu Name</th>
            <th>Status</th>
            <th>Link</th>
            <th class="rounded-end-bottom">Actions</th>
            </tr>
        </tfoot>
        </table>          
    </div>
</div>
@endsection
