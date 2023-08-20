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
                    <th>Date</th>
                    <th>Time</th>
                    <th>Remiding</th>
                    <th>First Grade</th>
                    <th>Second Grade</th>
                    <th>Third Grade</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($exams as $exam)
                <tr>
                    <td><strong>{{ ++$loop->index }}</strong></td>
                    <td>{{ $exam->name }}</td>
                    <td>{{ $exam->exam_date }}</td>
                    <td>
                        {{ \Carbon\Carbon::parse($exam->exam_time)->format('g:i A') }}
                    <td>
                        {{ \Carbon\Carbon::parse($exam->exam_date)->diffForHumans() }}
                    </td>
                    <td>{{ $exam->first_grade }}</td>
                    <td>{{ $exam->second_grade }}</td>
                    <td>{{ $exam->third_grade }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('exams.edit',$exam->id) }}"><i
                                        class="ti ti-pencil me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="{{ route('student.exam',$exam->id) }}"><i
                                        class="ti ti-pencil me-1"></i>
                                    Exam Assign</a>

                                <a class="dropdown-item" href="javascript:void(0);"
                                    onclick="$('#logout-form').submit();"><i class="ti ti-trash me-1"></i>
                                    Delete</a>
                                <form id="logout-form" action="{{ route('exams.destroy',$exam->id) }}" method="POST"
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