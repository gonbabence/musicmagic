<nav class="navbar navbar-expand-lg navbar-inverse navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home</a>
            </li>

            @if (Auth::check())
                <li class="nav-item active">
                    <a class="nav-link" href="/ads/create">Post your ad</a>
                </li>
            @endif

            <li class="nav-item active">
                <a class="nav-link" href="/ads/list">Ads</a>
            </li>
        </ul>

        @if (Auth::check())
            <ul class="navbar-nav mr-1">
                <li class="nav-item active"><a class="nav-link" href="#">{{ Auth::user()->name }}</a></li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                <button class="btn text-white my-2 my-sm-0" type="submit">Logout</button>
            </form>
        @else
            <ul class="navbar-nav mr-1">
                <li class="nav-item active"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            </ul>
            <ul class="navbar-nav mr-1">
                <li class="nav-item active"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            </ul>
        @endif
    </div>
</nav>
