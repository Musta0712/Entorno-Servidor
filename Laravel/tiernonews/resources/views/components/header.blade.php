<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-4">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#" style="letter-spacing: -1px;">
                <i class="fa-solid fa-newspaper me-2"></i>Tierno<span class="text-info">News</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <li class="nav-item px-2">
                        <a class="nav-link active fw-semibold" href="{{ route('journalist') }}"><i class="fa-solid fa-house-chimney me-1 small"></i> Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-semibold" href="{{ route('journalist.create') }}"><i class="fa-solid fa-circle-plus me-1 small"></i> Create</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link fw-semibold" href="#"><i class="fa-solid fa-user-tag me-1 small"></i> About Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>