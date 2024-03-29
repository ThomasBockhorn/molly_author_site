<!-- Navigation Menu -->

    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation fixed-top site-header border-bottom px-0" id="mainmenu-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container align-items-center">
                <a class="navbar-brand m-1" href="/">
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
                            <a href="#about" class="nav-link smoth-scroll">
                                About
                            </a>
                        </li>

                         <li class="nav-item ">
                            <a href="#reviews" class="nav-link smoth-scroll">
                                Reviews
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="#author" class="nav-link smoth-scroll">
                                About Me
                            </a>
                        </li>

                        @if(count($books) > 0)
                        <li class="nav-item ">
                            <a href="#additionalBooks" class="nav-link smoth-scroll">
                                More Books
                            </a>
                        </li>
                        @endif

                        @if(count($events) > 0)
                        <li class="nav-item ">
                            <a href="#events" class="nav-link smoth-scroll">
                                Events
                            </a>
                        </li>
                        @endif

                        <li class="nav-item ">
                            <a href="#contact" class="nav-link smoth-scroll">
                                Contact
                            </a>
                        </li>
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
