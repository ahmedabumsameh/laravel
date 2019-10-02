@extends('BackEnd.layouts.app')
@php
$titlePage="اضافه الوسم";
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
    <div class="col-xs-8">
      <div class="box box-primary">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{ route($routName.'.store') }}" method="POST">
            @include('BackEnd.'.$folderName.'.form')
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{  $titlePage }}</button>
          </div>
        </form>
      </div>
    </div>
    </section><!-- end of content -->
    </div><!-- end of content wrapper -->
    @endsection
