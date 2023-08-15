@extends('admin.layouts.layoutMaster')

@section('title', 'Class')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('gallery.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
</div>
<div class="card">
    <h5 class="card-header">Create Gallery</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Sub Title</th>                      
            <th>Category</th>
            <th>Small Image</th>
            <th>Big Image</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php 
            $sl=1 
            @endphp

            @foreach($gallerys as $gallery)
            <tr>
            <td>{{$sl++}}</td>
            <td>{{$gallery->title}}</td>
            <td>{{$gallery->sub_title}}</td>
            <td>{{$gallery->category}}</td>

            <td><img style="height: 4vh" src="{{url($gallery->big_image)}}" alt="Big Image"></td>
            <td><img style="height: 4vh" src="{{url($gallery->small_image)}}" alt="Small Image"></td>

            <td><span class="badge bg-label-primary me-1">{{$gallery->status == 1 ? 'Active' : 'Inactive'}}</span></td>
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="ti ti-dots-vertical"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('gallery.edit',$gallery->id)}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                    <form method="post" id="{{'form_'.$gallery->id}}" action="{{route('gallery.destroy',$gallery->id)}}">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" data-id="{{$gallery->id}}"><i class="ti ti-trash me-1"></i> Delete</button>
                        
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
            <th>Name</th>
            <th>Order By</th>                      
            <th>Institute Status</th>
            <th class="rounded-end-bottom">Actions</th>
            </tr>
        </tfoot>
        </table>          
    </div>
</div>
@endsection
