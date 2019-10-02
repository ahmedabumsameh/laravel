@extends('frontend.layouts.app')
@section('title')
Last Videos
@endsection
@section('css')
<link href="/frontEnd/css/innerPage.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container">

    @if (request()->has('search') && request()->get('search') != '')
        <p>Result: <small>{{request()->get('search') }}</small></p>
     @else
     <h2>Last Videos</h2>
    @endif
    <br>
    <div class="row">

            @foreach ($rows as $item)
                <div class="col-lg-4">
                        @include('frontEnd.partials._card')
                </div>
            @endforeach

    </div>
</div>
@endsection
