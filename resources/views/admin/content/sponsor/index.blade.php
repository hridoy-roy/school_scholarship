@extends('admin.layouts.layoutMaster')

@section('title', 'Sponsor')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('sponsor.edit',$sponsor->id)}}"> <button class=" btn btn-primary">➥ Edit</button></a>
</div>
<div class="card">
    <h5 class="card-header">Create Institute</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>First Image</th>
            <th>Second Image</th>
            <th>Third Image</th>
            <th>Fourth Image</th>
            <th>Fifth Image</th>
            <th>Sixth Image</th>
            <th>Seventh Image</th>
            <th>Eigth Image</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php 
            $sl=1 
            @endphp
            <tr>
            <td>{{$sl++}}</td>
            @for ($i=1; $i <9; $i++)
                <td><img src="{{$sponsor->$i}}" alt="" style="width: 100px"></td>
            @endfor            
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="ti ti-dots-vertical"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('sponsor.edit',$sponsor->id)}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                    <form method="post" id="{{'form_'.$sponsor->id}}" action="{{route('sponsor.destroy',$sponsor->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" data-id="{{$sponsor->id}}"><i class="ti ti-trash me-1"></i> Delete</button>
                    </form>
                </div>
                </div>
            </td>
            </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
            <tr>
            <th class="rounded-start-bottom">ID</th>
            <th>First Image</th>
            <th>Second Image</th>
            <th>Third Image</th>
            <th>Fourth Image</th>
            <th>Fifth Image</th>
            <th>Sixth Image</th>
            <th>Seventh Image</th>
            <th>Eigth Image</th>
            <th class="rounded-end-bottom">Actions</th>
            </tr>
        </tfoot>
        </table>          
    </div>
</div>
@endsection

