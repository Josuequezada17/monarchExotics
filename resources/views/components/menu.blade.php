<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><h1>ELITE MOTORS</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Log in</a></li> 
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" x-data>
                        @csrf
                        <a href="/logout" @click.prevent="$root.submit();">
                            SALIR
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead-->
<header class="masthead" style="background-image: url(build/assets/assets/img/background_elite_motors.jpg);">
    <div class="container">
        <div class="masthead-subheading" style="color: grey;">Welcome To Our Dealer!</div>
        <div class="masthead-heading text-uppercase" style="color: grey;">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div>
</header>