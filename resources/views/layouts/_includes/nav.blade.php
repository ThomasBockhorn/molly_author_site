<!-- Navigation Menu -->

    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation fixed-top site-header border-bottom" id="mainmenu-area">
        <nav class="navbar navbar-expand-lg ">
            <div class="container align-items-center">
                <a class="navbar-brand" href="index.html">
                    <h2 class="mb-0"><span class="text-color">Molly Felder</h2>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu-alt"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse text-center text-lg-left" id="navbarmain">
                    <!-- Links -->
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a href="#banner" class="nav-link smoth-scroll">
                                Home
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#book" class="nav-link smoth-scroll">
                                About
                            </a>
                        </li>

                         <li class="nav-item ">
                            <a href="#reviews" class="nav-link smoth-scroll">
                                Reviews
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="#contact" class="nav-link smoth-scroll">
                                Contact
                            </a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>

                    <ul class="list-inline top-socials mb-0">
                        <li class="list-inline-item">
                            <a href="#"><i class="ti-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="ti-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
