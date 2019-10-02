@extends('frontend.layouts.app')
@section('title')
{{ $row->name }}
@endsection
@section('css')
<link href="/frontEnd/css/innerPage.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1>{{ $row->name }}</h1>
            <br>
            <div class="videoWrapper">
            <iframe width="100%" height="500"
            src="https://www.youtube.com/embed/{{ $row->youtube }}" allowfullscreen frameborder="0">
            </iframe>

            <div class="row">
                    <div class="col-md-6">
                        <p>
                            <span style="margin-right: 20px">
                                <i class="nc-icon nc-user-run"></i> :{{ $row->user->name }}
                            </span>
                            <span style="margin-right: 20px">
                                <i class="nc-icon nc-calendar-60"></i> : {{ $row->created_at->diffForHumans() }}
                            </span>
                            <span style="margin-right: 20px">
                                <i class="nc-icon nc-single-copy-04"></i> :    <a href="{{ route('frontEnd.category', ['id'=>$row->category->id]) }}">{{ $row->category->name }}</a>
                            </span>


                        </p>

                    </div>
                    <div class="col-md-3">
                            <h6>Tags</h6>
                            <p>
                                    @foreach ($row->tags as $item)
                                    <a href="{{ route('frontEnd.tags', ['id'=>$item->id]) }}"> <span class="badge badge-info">{{ $item->name }}</span></a>
                                     @endforeach
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6>Skills</h6>
                            <p>
                                    @foreach ($row->skills as $item)
                                    <a href="{{ route('frontEnd.skills', ['id'=>$item->id]) }}"> <span class="badge badge-info">{{ $item->name }}</span></a>


                            @endforeach
                            </p>
                        </div>

            </div>






            </div>


        </div>

            <div class="col-lg-12">
                    <br>
                    <p>
                            {{ $row->des }}

                        </p>
                </div>

        @include('frontEnd.comments.index')
        @if(auth()->user())
        @include('frontEnd.comments.create')
        @else
           <a href="{{ route('login') }}">Login to Add Comment</a>
        @endif
    </div>
</div>
@endsection
