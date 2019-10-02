@extends('BackEnd.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.dashboard')</h1>


        </section>

        <section class="content">

            <div class="row">
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>{{ $usersCount }}</h3>

                      <p>عدد المشرفين</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                          <div class="inner">
                            <h3>{{ App\Models\Video::count() }}</h3>

                            <p>عدد الفيدوهات</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-bag"></i>
                          </div>
                          <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                              <div class="inner">
                                <h3>{{ App\Models\Category::count() }}</h3>

                                <p>عدد الاقسام</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-bag"></i>
                              </div>
                              <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                          </div>
                          <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                  <div class="inner">
                                    <h3>{{ App\Models\Tag::count() }}</h3>

                                    <p>عدد الاوسمه</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-bag"></i>
                                  </div>
                                  <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                              </div>
                              <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-c2">
                                      <div class="inner">
                                        <h3>{{ App\Models\Skill::count() }}</h3>

                                        <p>عدد المهارات</p>
                                      </div>
                                      <div class="icon">
                                        <i class="ion ion-bag"></i>
                                      </div>
                                      <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-xs-6">
                                        <!-- small box -->
                                        <div class="small-box bg-c3">
                                          <div class="inner">
                                            <h3>{{ App\Models\Page::count() }}</h3>

                                            <p>عدد الصفحات</p>
                                          </div>
                                          <div class="icon">
                                            <i class="ion ion-bag"></i>
                                          </div>
                                          <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                      </div>
              </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
