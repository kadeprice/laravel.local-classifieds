<nav class="navbar navbar-inverse navbar-top" id="topnav">
    <div class="container-fluid">
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
                    <li class="{{ Request::is( 'forsell') ? 'active' : '' }}"><a href="{{ route('post.category',['for-sell']) }}">For Sell</a></li>
                    <li class="{{ Request::is( 'events') ? 'active' : '' }}"><a href="{{ route('post.category',['events']) }}">Events</a></li>
                    <li class="{{ Request::is( 'outsidelinks') ? 'active' : '' }}"><a href="{{ route('post.category',['wanted']) }}">Outside Links</a></li>
                    <li class="{{ Request::is( 'community') ? 'active' : '' }}"><a href="{{ route('post.category',['service']) }}">Community</a></li>
                    @if (Auth::guest())
                        <li class="{{ Request::is( 'users/create') ? 'active' : '' }}"><a href="{{ url('users/create') }}">Create Profile</a></li>
                    @else
                        <li class="{{ Request::is( 'users/create') ? 'active' : '' }}"><a href="{{ route('users.posts', Auth::id()) }}">My Posts</a></li>                        
                    @endif

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::is( 'post/create') ? 'active' : '' }} dropdown">
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false"><span class="caret"></span> Post</a>
                        <ul class="dropdown-menu" role='menu'>
                            @foreach(Classifieds\Categories::all() as $category)
                                <li><a href="{{ route('post.create', "category=$category->key") }}">{{ $category->category }}</a></li>
                            @endforeach
                        </ul>
                    
                    </li>
                    
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