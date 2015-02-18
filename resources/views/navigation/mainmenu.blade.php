<nav class="navbar navbar-inverse navbar-fixed-top" id="topnav">
    <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is( '/') ? 'active' : '' }}"><a href="/">Home</a></li>
                    <li class="{{ Request::is( 'forsell') ? 'active' : '' }}"><a href="#services">For Sell</a></li>
                    <li class="{{ Request::is( 'events') ? 'active' : '' }}"><a href="#features">Events</a></li>
                    <li class="{{ Request::is( 'outsidelinks') ? 'active' : '' }}"><a href="#pricing">Outside Links</a></li>
                    <li class="{{ Request::is( 'community') ? 'active' : '' }}"><a href="#clients">Community</a></li>
                    @if (Auth::guest())
                        <li class="{{ Request::is( 'users/create') ? 'active' : '' }}"><a href="{{ url('users/create') }}">Create Profile</a></li>
                    @endif

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="{{ route('post.create') }}">Post</a></li>
                    
                    <li class="{{ Request::is( 'auth/login') ? 'active' : '' }}">
                        @if (Auth::guest())
                            <a href="{{ url('auth/login') }}">Login</a>
                        @else
                            <a href="{{ url('auth/logout') }}">Logout</a>
                        @endif
                    </li>
                </ul>

            </div>
        <!--/.navbar-collapse -->
    </div>
</nav>