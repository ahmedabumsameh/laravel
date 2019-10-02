@extends('BackEnd.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.create')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('BackEnd.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('users.index') }}"><i class="fa fa-dashboard"></i> @lang('site.users')</a></li>
                <li class="active">@lang('site.create')</li>
            </ol>
        </section>
        <section class="content">

                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">@lang('site.users')</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  @include('BackEnd.partials._errors')
                  <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.firstName')</label>
                                <input type="text" class="form-control" name="name" placeholder="@lang('site.firstName')"  value="{{ old('firstName') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">@lang('site.email')</label>
                            <input type="email" class="form-control" name="email" placeholder="@lang('site.email')" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">@lang('site.password')</label>
                            <input type="password" class="form-control" name="password" placeholder="@lang('site.password')">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">@lang('site.password_confirmation')</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="@lang('site.password_confirmation')">
                        </div>

                        <div class="form-group ">
                                <label class="bmd-label-floating"> الرتبه</label>
                                <select name="role" class="form-control @error('role') is-invalid @enderror">
                                  <option value="user" {{ isset($row) && $row->role == 'user' ? 'selected'  :'' }}>user</option>
                                  <option value="admin" {{ isset($row) && $row->role == 'admin' ? 'selected'  :'' }}>admin</option>
                                </select>
                                @if ($errors->has('role'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('role') }}</strong>
                                </span>
                                @endif
                              </div>

                    </div>
                    <!-- /.box-body -->


                      <div class="box-footer">
                      <button type="submit" class="btn btn-primary">@lang('site.add')</button>


                    </div>

                  </form>
                </div>
                <!-- /.box -->


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
