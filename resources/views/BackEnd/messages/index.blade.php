@extends('BackEnd.layouts.app')

@php
    $modelName = "الرسائل";


@endphp
@section('title')
    {{ $modelName }}
@endsection
@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>{{ $modelName }}</h1>

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">{{ $modelName }}</li>
            </ol>
        </section>

        <section class="content">

            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                        <p>{{ $modelName }}</p>

                    <div class="box-tools">

                      <div class="input-group input-group-sm" style="width: 150px;">

                        <input type="text" name="table_search" class="form-control pull-right" placeholder="@lang('site.search')">

                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                        @if ($rows->count() > 0)
                        <table class="table table-hover">
                                <tbody>
                                    <tr>
                                  <th style="width: 10px">#</th>
                                  <th style="width: 200px">الاسم </th>
                                  <th style="width: 200px">الاميل </th>
                                  <th>الرساله </th>

                                  <th class="text-center" style="width: 200px;">@lang('site.action')</th>
                                </tr>
                                @foreach ($rows as $i=>$item)
                                   <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->email }} </td>
                                        <td>{{ $item->content }} </td>
                                        <td class="text-center">
                                            @include('BackEnd.partials.buttons._edit')
                                            @include('BackEnd.partials.buttons._delete')
                                        </td>

                                      </tr>
                                @endforeach


                              </tbody></table>
                        @else
                            @lang('site.no_records')
                        @endif
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

        </section><!-- end of content -->
{{ $rows->links() }}
    </div><!-- end of content wrapper -->

@endsection

