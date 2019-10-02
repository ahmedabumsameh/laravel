@extends('frontend.layouts.app')

@section('content')
@include('frontEnd.partials._slider')
<section class="last-video mt-5 text-center">
    <div class="sectiontitle m-5">
            <h2 class="text-center ">Last Videos</h2>
            <span class="headerLine"></span>
        </div>
    <div class="container">
    <div class="row">
        @foreach ($lastVideo as $item)
            <div class="col-md-4">
            <div class="card text-left" >
                    <a href="{{ route('frontEnd.video.show', ['id'=>$item->id]) }}" >
                    <img class="card-img-top" src="{{ url($item->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item->name }}</h4>
                        <p class="card-text">{{ $item->des }}</p>
                        <small>{{ $item->created_at->diffForHumans() }}</small>
                    </div>
                </a>

                </div>
                </div>
        @endforeach

</div>
<a href="{{ route('frontEnd.videos')}}" class="btn btn-danger btn-round  m-3" >Show More</a>

</div>

</section>

<section class="section  text-center">
        <div class="sectiontitle">
                <h2>Projects statistics</h2>
                <span class="headerLine"></span>
            </div>
            <section id="projectFacts" class="sectionClass">
                <div class="fullWidth eight columns">
                    <div class="projectFactsWrap ">
                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                            <i class="fa fa-briefcase"></i>
                            <p id="number1" class="number">12</p>
                            <span></span>
                            <p>Projects done</p>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                            <i class="fa fa-smile-o"></i>
                            <p id="number2" class="number">55</p>
                            <span></span>
                            <p>Happy clients</p>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                            <i class="fa fa-coffee"></i>
                            <p id="number3" class="number">359</p>
                            <span></span>
                            <p>Cups of coffee</p>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                            <i class="fa fa-camera"></i>
                            <p id="number4" class="number">246</p>
                            <span></span>
                            <p>Photos taken</p>
                        </div>
                    </div>
                </div>
            </section>
</section>

<section class="contactUs">
        <div class="sectiontitle">
                <h2>Contact Us</h2>
                <span class="headerLine"></span>
            </div>
        @include('frontEnd.partials._contactUs')
</section>
@endsection

