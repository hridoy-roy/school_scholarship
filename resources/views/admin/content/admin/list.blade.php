@extends('admin.layouts.layoutMaster')

@section('title', 'Tables - Basic Tables')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
</h4>
<!-- Bootstrap Table with Header - Light -->
<div class="card">
    <h5 class="card-header">{{ $header ?? 'N/A' }}</h5>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($users as $user)
                <tr>
                    <td><strong>{{ ++$loop->index }}</strong></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->is_admin == 1)
                        <span class="badge bg-label-danger me-1">Super Admin User</span>
                        @else
                        <span class="badge bg-label-warning me-1">Admin User</span>
                        @endif
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}"><i
                                        class="ti ti-pencil me-1"></i>
                                    Edit</a>
                                @if (auth()->user()->id !== $user->id )
                                <a class="dropdown-item" href="javascript:void(0);"
                                    onclick="$('#logout-form').submit();"><i class="ti ti-trash me-1"></i>
                                    Delete</a>
                                <form id="logout-form" action="{{ route('users.destroy',$user->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>No Data</td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
<!-- Bootstrap Table with Header - Light -->

@endsection