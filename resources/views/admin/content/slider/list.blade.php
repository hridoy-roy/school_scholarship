@extends('admin.layouts.layoutMaster')

@section('title', 'Class')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('slider.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
</div>
<div class="card">
    <h5 class="card-header">Slider list</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Sub Title</th>
            <th>Title</th>           
            <th>Description</th>
            <th>link one</th>
            <th>link two</th>
            <th>Logo</th>
            <th>Favicon</th>
            <th>Bg Image</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php 
            $sl=1 
            @endphp

            @foreach($sliders as $slider)
            <tr>
            <td>{{$sl++}}</td>
            <td>{{$slider->sub_title}}</td>
            <td>{{$slider->title}}</td>
            <td>{{$slider->description}}</td>
            <td>{{$slider->link1}}</td>
            <td>{{$slider->link2}}</td>

            <td><img style="height: 4vh" src="{{url($slider->logo)}}" alt="Logo"></td>

            <td><img style="height: 4vh" src="{{url($slider->favicon)}}" alt="Favicon"></td>
            <td><img style="height: 4vh" src="{{url($slider->bg_img)}}" alt="BG Image"></td>

            <td><span class="badge bg-label-primary me-1">{{$slider->status == 1 ? 'Active' : 'Inactive'}}</span></td>
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="ti ti-dots-vertical"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('slider.edit',$slider->id)}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                    <form method="post" id="{{'form_'.$slider->id}}" action="{{route('slider.destroy',$slider->id)}}">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" data-id="{{$slider->id}}"><i class="ti ti-trash me-1"></i> Delete</button>
                        
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

            <th>Sub Title</th>
            <th>Title</th>           
            <th>Description</th>
            <th>link one</th>
            <th>link two</th>
            <th>Logo</th>
            <th>Favicon</th>
            <th>Bg Image</th>

            <th class="rounded-end-bottom">Actions</th>
            </tr>
        </tfoot>
        </table>          
    </div>
</div>
@endsection
