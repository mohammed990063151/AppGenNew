<nav class="navbar navbar-expand-lg navbar-light foi-navbar">
    <a class="navbar-brand" href="index.html">
        <img src="{{ asset('landing-assets/images/logo.svg') }}" alt="FOI">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="features">Features</a>
            </li>
            {{-- <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Pages</a>
                <div class="dropdown-menu" aria-labelledby="pagesMenu">
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a class="dropdown-item" href="login.html">Login</a>
                    <a class="dropdown-item" href="register.html">Register</a>
                    <a class="dropdown-item" href="faq.html">FAQ <span class="sr-only">(current)</span></a>
                    <a class="dropdown-item" href="404.html">404</a>
                    <a class="dropdown-item" href="careers.html">Careers</a>
                    <a class="dropdown-item" href="blog-single.html">Single blog</a>
                    <a class="dropdown-item" href="privacy-policy.html">Privacy policy</a>
                </div>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="contact">contact</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item mr-2 mb-3 mb-lg-0">
                <a class="btn btn-secondary" href="register.html">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-secondary" href="login.html">Login</a>
            </li>
        </ul>
    </div>
</nav>
