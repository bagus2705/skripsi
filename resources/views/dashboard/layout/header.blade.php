<header class="navbar navbar-dark bg-dark sticky-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand me-auto fs-6" href="#">Katalogisasi</a>
        <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" 
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-flex align-items-center">
            <form action="/logout" method="post" class="d-flex align-items-center m-0">
                @csrf
                <button type="submit" class="btn btn-dark border-0 text-nowrap d-flex align-items-center">
                    <i class="bi bi-box-arrow-left me-1"></i> Logout
                </button>
            </form>
        </div>
    </div>
</header>
