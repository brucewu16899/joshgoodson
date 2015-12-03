<header id="header" class=" header-full-width ">
    <div class="header-sticky light-header ">
        <div class="container">
            <div id="massive-menu" class="menuzord">
                <ul class="menuzord-menu pull-right">
                    <li>{!! link_to_route('home', 'Home') !!}</li>
                    <li>{!! link_to_route('about', 'About') !!}</li>
                    <li>{!! link_to_route('blog', 'Blog') !!}</li>
                    <li>{!! link_to_route('contact', 'Contact') !!}</li>

                    <li class="nav-icon nav-divider">
                        <a href="javascript:void(0)">|</a>
                    </li>

                    @if (Auth::guest())
                    <li class="nav-icon"><a href="/auth/register"><i class="fa fa-btn fa-heart"></i>Register</a></li>
                    <li class="nav-icon"><a href="/auth/login"><i class="fa fa-btn fa-sign-in"></i>Login</a></li>
                    @else
                    <li class="nav-icon">
                        <a href="/user/profile"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</a>
                        <ul class="dropdown">
                          <li>{!! link_to_route('profile', 'My Profile') !!}</li>
                          <li>{!! link_to_route('settings', 'My Settings') !!}</li>
                          <li>{!! link_to_route('messages', 'My Messages') !!}</li>
                          <li>{!! link_to_route('tasks', 'My Tasks') !!}</li>
                        </ul>
                    </li>
                    <li class="nav-icon"><a href="/auth/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    @endif

                    <li class="nav-icon">
                        <a href="javascript:void(0)">
                            <i class="fa fa-search"></i> Search
                        </a>
                        <div class="megamenu megamenu-quarter-width search-box">
                            <div class="megamenu-row">
                                <div class="col12">
                                  {!! Form::open([
                                    'route' => 'submitSearch',
                                    'name' => 'search-form',
                                    'role' => 'form'
                                  ]) !!}
                                  {!! Form::text('search', old('search'), [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter Search Keyword'
                                  ]) !!}
                                  </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
