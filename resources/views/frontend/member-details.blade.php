@extends('frontend.layouts.main')

@section('main-container')
<!-- Member Section -->
<section id="member" class="member">
    <div class="container">
        <div class="row">
            <div class="main_member sections">
                <div class="head_title text-center">
                    <h2>MEMBER Details</h2>
                    <div class="">
                        <h4>{{ $member->title }}</h4>
                        {{ \Carbon\Carbon::parse($member->created_at)->diffForHumans() }}
                    </div>
                    <div class="separator"></div>
                </div><!-- End off Head_title -->

                <div class="main_member_content">
                    {!! $member->body !!}
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End off Member Section -->
@endsection
