<nav class="navbar navbar-dark navbar-expand-lg bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <!-- Image Logo -->
            <a class="navbar-brand" href=""><img src="{{ url('storage/images/logo.png') }}" height="50px"
                    width="50px"></a>
            <p style="color: white">{{ config('app.name', 'Laravel') }}</p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">{{ config('app.name', 'Laravel') }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item" style="list-style-type:none;">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('/') }}">Home</a>
                    </li>
                    <li class="nav-item" style="list-style-type:none;">
                        <a class="nav-link {{ request()->is('donate') ? 'active' : '' }}"
                            href="{{ route('donate') }}">Donate</a>
                    </li>
                    <li class="nav-item" style="list-style-type:none;">
                        <div id="google_translate_element"></div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</nav>
