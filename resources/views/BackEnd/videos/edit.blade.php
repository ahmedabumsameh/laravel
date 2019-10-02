@extends('BackEnd.layouts.app')
@php
$titlePage="تعديل الفيديو ";
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

        <form action="{{ route($routName.'.update',['id'=>$row->id]) }}" method="POST"  enctype="multipart/form-data">
            @method('PUT')
            @include('BackEnd.'.$folderName.'.form')

        </form>
        <div class="row">
        @include('BackEnd.comments.index')
        @include('BackEnd.comments.create')
        </div>
    </section><!-- end of content -->
    </div><!-- end of content wrapper -->
    @endsection
