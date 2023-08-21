@extends('admin.layouts.layoutMaster')

@section('title', 'Analytics')

@section('content')

<div class="row">
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0 text-info">Student Register in this Year :</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $studentInThisYear }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0 text-info">Student Register Paid in this Year :</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $studentInThisYearPay }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0 text-info">Total Student Register :</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $totalStudent }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0">Total Exam</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $totalExam }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0">Total Members</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $totalMember }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0">Total Blogs</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $totalBlog }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0">Total Slider</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $totalSlider }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0">Total Sponsor</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $totalGallery }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0">Total School</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $totalSchool }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="">
                    <h5 class="mb-0">Total Class</h5>
                </div>
                <h4 class="card-title mb-1 text-success">{{ $totalClass }}</h4>
            </div>
        </div>
    </div>
</div>
@endsection