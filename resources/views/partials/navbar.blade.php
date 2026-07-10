<nav class="navbar navbar-expand-lg custom-navbar fixed-top">

    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand logo" href="{{ url('/') }}">
            Barkat<span>.</span>
        </a>

        {{-- Mobile Toggle --}}
        <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <i class="fas fa-bars"></i>

        </button>

        {{-- Navigation --}}
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="#hero">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

                <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                    <a href="#contact" class="btn btn-primary-custom">
                        Hire Me
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>