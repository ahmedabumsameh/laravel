<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="/" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
              Learn Program
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Category
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                              @foreach ($Categories as $item)
                              <a class="dropdown-item" href="{{ route('frontEnd.category', ['id'=>$item->id ]) }}">{{ $item->name }}</a>
                              @endforeach
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Skills
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($Skills as $item)
                                        <a class="dropdown-item" href="{{ route('frontEnd.skills', ['id'=>$item->id ]) }}">{{ $item->name }}</a>
                                        @endforeach
                                </div>
                              </li>
             @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Regisrer</a>
                </li>
                @else
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                        </div>
                      </li>
                      <li> <form class="form-inline ml-auto " accept="{{ route('frontEnd.videos') }}" style="margin-top: 15px">
                            <div class="form-group has-white">
                              <input type="text" name="search" class="form-control" placeholder="Search">
                            </div>
                        </form></li>
                @endguest
            </ul>

          </div>
        </div>
      </nav>
