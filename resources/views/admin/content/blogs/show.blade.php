@extends('admin.layouts.layoutMaster')

@section('title', 'Tables - Basic Tables')
<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-faq.css')}}" />
<style>
    .ql-tooltip {
        display: none;
    }
</style>
@endsection
@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">{{ $title ?? 'N/A' }} /</span> {{ $sub_title ?? 'N/A' }}
</h4>
<div class="faq-header d-flex flex-column justify-content-center align-items-center rounded">
    <h3 class="text-center"> {{ $blog->title }} </h3>
    <div class="center">
        <img src="{{ asset('upload/blog/'.$blog->banner) }}" alt="Banner" height="100" class="center">
    </div>
    <p class="text-center mb-0 px-3">Time : {{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</p>
</div>

<div class="row mt-4">

    <!-- FAQ's -->
    <div class="col-12">
        <div class="tab-content py-0">
            <div class="tab-pane fade show active" id="payment" role="tabpanel">
                <div class="d-flex mb-3 gap-3">
                    <div>
                        <span class="badge bg-label-primary rounded-2 p-2">
                            <i class="ti ti-file-description ti-lg"></i>
                        </span>
                    </div>
                    <div>
                        <h4 class="mb-0">
                            <span class="align-middle">Body</span>
                        </h4>
                    </div>
                </div>
                <div class="accordion">
                    <div class="card accordion-item">
                        <div id="accordionPayment-1" class="accordion-collapse collapse show">
                            <div class="accordion-body disabled" contenteditable="false">
                                {!! $blog->body !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /FAQ's -->
</div>
<!-- Bootstrap Table with Header - Light -->
<script>
    document.getElementsByClassName("ql-editor").removeAttribute("contenteditable: false");
</script>

@endsection
