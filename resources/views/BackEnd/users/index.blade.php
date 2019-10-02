@extends('BackEnd.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">@lang('site.users')</li>
            </ol>
        </section>

        <section class="content">

            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">@lang('site.users')</h3>

                    <a href="{{ route('users.create') }}" class="btn btn-success">
                            <i class="fa fa-user-plus"></i> @lang('site.add')
                          </a>
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
                                  <th>@lang('site.id')</th>
                                  <th>@lang('site.firstName')</th>
                                  <th>@lang('site.email')</th>
                                  <th>الرتبه</th>
                                  <th>@lang('site.action')</th>
                                </tr>
                                @foreach ($rows as $i=>$item)
                                   <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>

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

    </div><!-- end of content wrapper -->

@endsection
