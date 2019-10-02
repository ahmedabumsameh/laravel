<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name ?? '' }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
                 <li class="{{ is_active('home') }}"><a href="{{ route('BackEnd.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>
                 <li class="{{ is_active('videos') }}"><a href="{{ route('videos.index') }}"><i class="fa fa-th"></i><span>@lang('site.videos')</span></a></li>

                 <li class="{{ is_active('categories') }}"><a href="{{ route('categories.index') }}"><i class="fa fa-th"></i><span>@lang('site.categories')</span></a></li>
                  <li class="{{ is_active('skills') }}"><a href="{{ route('skills.index') }}"><i class="fa fa-th"></i><span>@lang('site.skills')</span></a></li>
                  <li class="{{ is_active('tags') }}"><a href="{{ route('tags.index') }}"><i class="fa fa-th"></i><span>@lang('site.tags')</span></a></li>
                  <li class="{{ is_active('pages') }}"><a href="{{ route('pages.index') }}"><i class="fa fa-th"></i><span>@lang('site.pages')</span></a></li>
                  <li class="{{ is_active('messages') }}"><a href="{{ route('messages.index') }}"><i class="fa fa-th"></i><span>@lang('site.messages')</span></a></li>

                  <li class="treeview {{ is_active('users') }} ">
                        <a href="#">
                          <i class="fa fa-edit"></i> <span>@lang('site.users')</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                            {{--  @if (auth()->user()->hasPermission('read_users'))

                            @endif  --}}
                            <li class=""><a href="{{ route('users.index') }}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
                            <li><a href=""><i class="fa fa-th"></i><span>@lang('site.create')</span></a></li>


                            </ul>
                      </li>










                  {{--<li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-book"></i><span>@lang('site.categories')</span></a></li>--}}
            {{----}}
            {{----}}
            {{--<li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-users"></i><span>@lang('site.users')</span></a></li>--}}

            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>الخرائط</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li>--}}
            {{--<a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a>--}}
            {{--</li>--}}
            {{--<li>--}}
            {{--<a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
        </ul>

    </section>

</aside>

