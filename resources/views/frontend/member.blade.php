<!--member section -->

<section id="member" class="feature sections">
    <div class="container">
        <div class="row">
            <div class="main_feature text-center">

                @foreach ($members as $member)
                    
                @endforeach

                <div class="col-sm-3">
                    <div class="single_feature">
                        <div class="single_member_img">
                            <img src="{{asset('upload/member/'.$member->banner)}}" alt="" />
                        </div>

                        <h4>{{ $member->title }}</h4>
                        <div class="separator3"></div>
                        <p>{!! Str::words($member->body, 30, '...') !!}</p>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
</section>
    
<!--End of feature Section -->
<hr />