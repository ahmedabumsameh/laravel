@extends('frontend.layouts.app')
@section('title')
{{ $type->name }}
@endsection
@section('css')
<link href="/frontEnd/css/innerPage.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container">
    <h2>{{ $type->name }}</h2>
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
