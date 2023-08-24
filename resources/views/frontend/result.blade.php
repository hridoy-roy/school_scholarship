@extends('frontend.layouts.main')

@section('main-container')

<section id="result" class="result">
    <div class="container">
        <div class="table-responsive">
            <table class="table  table-striped w-100 text-center" style="margin-top: 100px !important">
                <tr>
                    <th scope="col">SL</th>
                    <td scope="col"><strong>Exam Name</strong></td>
                    <td scope="col"><strong>Date</strong></td>
                    <td scope="col"><strong>Download</strong></td>
                </tr>
                @foreach ($exams as $exam)
                <tr>
                    <th scope="row"><strong>{{ ++$loop->index }}</strong></th>
                    <td>{{ $exam->name }}</td>
                    <td>{{ $exam->exam_date }}</td>
                    <td>
                        <a href="{{ route('exam.result.download',$exam->id) }}" class="btn btn-success "
                            style="margin: 0"><strong>Result</strong></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
