@extends('admin.layouts.layoutMaster')

@section('title', 'Contact')

@section('content')
<div class="d-flex justify-content-between my-2">
    <h4 class="fw-bold">
        <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
    </h4>
    <a href="{{route('contact.create')}}"> <button class=" btn btn-primary">➥ Create</button></a>
</div>
<div class="card">
    <h5 class="card-header">Create Contact</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Subject</th>                      
            <th>Mobile</th>
            <th>email</th>
            <th>massage</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php 
            $sl=1 
            @endphp

            @foreach($contacts as $contact)
            <tr>
            <td>{{$sl++}}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->subject}}</td>
            <td>{{$contact->mobile}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->massage}}</td>
            <td>
                <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="ti ti-dots-vertical"></i>
                </button>
                <div class="dropdown-menu">                    
                    <form method="post" id="{{'form_'.$contact->id}}" action="{{route('contact.destroy',$contact->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item" data-id="{{$contact->id}}"><i class="ti ti-trash me-1"></i> Delete</button>
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
            <th>Subject</th>                      
            <th>Mobile</th>
            <th>email</th>
            <th>massage</th>
            <th class="rounded-end-bottom">Actions</th>
            </tr>
        </tfoot>
        </table>          
    </div>
</div>
@endsection

