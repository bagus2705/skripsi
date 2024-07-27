            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                                href="/dashboard">
                                <span class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <span class="align-text-bottom"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard/bookmarks">
                                <span class="align-text-bottom"></span>
                                Your Bookmarks
                            </a>
                        </li>
                    </ul>
                    @can('filologis')
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3
                    mt-4 mb-1 text-muted">
                            <span>Filologis</span>
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard/scripts*') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/scripts">
                                    <span class="align-text-bottom"></span>
                                    Naskah
                                </a>
                            </li>
                        </ul>
                    @endcan
                    @can('admin')
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3
                    mt-4 mb-1 text-muted">
                            <span>Admin</span>
                        </h6>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/categories">
                                    <span class="align-text-bottom"></span>
                                    Kategori
                                </a>
                            </li>
                        </ul>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('dashboard/scripts*') ? 'active' : '' }}"
                                    aria-current="page" href="/dashboard/scripts">
                                    <span class="align-text-bottom"></span>
                                    Naskah
                                </a>
                            </li>
                        </ul>
                    @endcan
                </div>
            </nav>
