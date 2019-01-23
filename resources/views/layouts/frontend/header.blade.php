<!--Main Navigation-->
<header id="mainheader">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light white scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand waves-effect" href="{{ route('home') }}">
            Biz <strong class="blue-text">Work</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link waves-effect" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="#">Biz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect" href="#">Contact</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-info btn-rounded" ><i class="fas fa-sign-in-alt mr-2"></i>{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-rounded"><i class="fas fa-user mr-2"></i>{{ __('Sign Up') }}</a>
                    </li>
                    @endif
                    @else

                        <li class="nav-item">
                            <a class="btn btn-default ro-co log-in-user" href="{{ route('my-account') }}">
                                Hello! <strong>{{ Auth::user()->name }} </strong>
                            </a>
                           
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ro-co" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                @endguest
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

</header>
<!--Main Navigation-->