@extends('BackEnd.layouts.app')
@php
$titlePage="اضافه الفيديو";
$editVideo="تعديل الفيديو";
@endphp
@section('title')
{{  $titlePage }}
@endsection
@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>{{  $titlePage }}</h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
      <li class="active">{{  $titlePage }}</li>
    </ol>
  </section>
  <section class="content">

        <form action="{{ route($routName.'.store') }}" method="POST"  enctype="multipart/form-data">
            @include('BackEnd.'.$folderName.'.form')

        </form>

    </section><!-- end of content -->
    </div><!-- end of content wrapper -->
    @endsection
