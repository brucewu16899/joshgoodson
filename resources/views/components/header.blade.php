<header id="header" class=" header-full-width ">

    <div class="header-sticky light-header ">

        <div class="container">
            <div id="massive-menu" class="menuzord">

                <!--logo-->
                <a href="index.html" class="logo-brand">
                    <!-- <img class="retina" src="img/logo.png" alt=""/> -->
                </a>

                <ul class="menuzord-menu pull-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/blog">Blog</a></li>

                    <li class=""><a href="javascript:void(0)">Pages</a>
                        <div class="megamenu">
                            <div class="megamenu-row">
                                <div class="col3">
                                    <ul class="list-unstyled">
                                        <li><a href="/about">About Me</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <ul class="list-unstyled">
                                        <li><a href="shortcode-career.html">Career</a></li>
                                        <li><a href="faq-1.html">FAQ 1</a></li>
                                        <li><a href="maintenance.html">Maintenance</a></li>
                                    </ul>
                                </div>
                                <div class="col3">
                                    <ul class="list-unstyled">
                                        <li><a href="contact-us-1.html">Contact 1</a></li>
                                        <li><a href="contact-us-2.html">Contact 2</a></li>
                                        <li><a href="contact-us-3.html">Contact 3</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="404-alt.html">Error 404 Alt</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

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
                            <li><a href="/user/profile">My Profile</a></li>
                            <li><a href="/user/settings">My Settings</a></li>
                            <li><a href="/user/messages">My Inbox</a></li>
                            <li><a href="/tasks">My Tasks</a></li>
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
                                    <form role="form">
                                        <input type="text" class="form-control" placeholder="Enter Search Keyword">
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
