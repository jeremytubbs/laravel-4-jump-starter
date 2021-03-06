<header id="header" role="header">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">{{ $_ENV['SITE_NAME'] }}</a>
            </div>
            <div class="collapse navbar-collapse pull-right">
                <ul class="nav navbar-nav">
                    <li>
                    @if (! Auth::check())
                        <a href="{{ URL::to('login') }}"><i class="fa fa-sign-in fa-lg"></i> Login</a>
                    @else
                        <a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                    @endif
                    </li>
                    @if (Auth::guest() || ! Auth::user()->hasRole('admin'))
                    <li>
                        {{ link_to_route('contact', 'Contact') }}
                    </li>
                    @endif
                    @if (! Auth::guest() && Auth::user()->hasRole('admin'))
                    <li>
                        {{ link_to_route('dashboard', 'Dashboard') }}
                    </li>
                    <li>
                        {{ link_to_route('editor', 'New Post') }}
                    </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>