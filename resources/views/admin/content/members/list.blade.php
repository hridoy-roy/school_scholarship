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
                    <th>Banner</th>
                    <th>Date</th>
                    <th>Designation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($members as $member)
                <tr>
                    <td><strong>{{ ++$loop->index }}</strong></td>
                    <td>{{ $member->title }}</td>
                    <td><img src="{{asset('upload/member/'.$member->banner)}}" alt="Banner" class="rounded-circle"
                            height="80"></td>
                    <td>
                        {{ \Carbon\Carbon::parse($member->created_at)->diffForHumans() }}
                    </td>
                    <td>
                        {{ $member->designation }}
                    </td>

                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('members.edit',$member->id) }}"><i
                                        class="ti ti-pencil me-1"></i>
                                    Edit</a>

                                <a class="dropdown-item" href="javascript:void(0);"
                                    onclick="$('#member-delete-form').submit();"><i class="ti ti-trash me-1"></i>
                                    Delete</a>
                                <form id="member-delete-form" action="{{ route('members.destroy',$member->id) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
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
