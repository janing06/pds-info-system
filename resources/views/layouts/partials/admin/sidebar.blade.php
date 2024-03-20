{{-- sidebar toggle --}}
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
        {{-- <img class="navbar-brand-dark" src="" alt="{{ config('app.name') }} logo" /> --}}
        {{-- <img class="navbar-brand-light" src="" alt="{{ config('app.name') }} logo" /> --}}
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

{{-- sidebar --}}
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="{{ asset('img/team/user-profile.png') }}" class="card-img-top rounded-circle border-white"
                        alt="Default User Profile">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, {{ auth()->user()->name }}!</h2>
                    {{-- Authentication --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="" class="logout btn btn-secondary btn-sm d-inline-flex align-items-center">
                            <i class="icon icon-xxs me-1 bi bi-box-arrow-right"></i>
                            Logout
                        </a>
                    </form>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="icon fs-1 icon-md bi bi-x"></i>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        {{-- <img src=""  width="20" alt="{{ config('app.name') }} Logo"> --}}
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">PDS Info System</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="icon icon-xs me-2 bi bi-speedometer"></i>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('cprs.*') ? 'active' : '' }}">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-cprs"
                    aria-expanded="{{ request()->routeIs('cprs.*') ? 'true' : 'false' }}">
                    <span>
                        <span class="sidebar-icon">
                            <i class="icon icon-xs me-2 bi bi-menu-up"></i>
                        </span>
                        <span class="sidebar-text">CPRS</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse {{ request()->routeIs('cprs.*') ? 'show' : '' }}" role="list"
                    id="submenu-cprs" aria-expanded="true">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ request()->routeIs('cprs.clients.*') ? 'active' : '' }}">
                            <a class="nav-link" href="#">
                                <span class="sidebar-text">Clients</span>
                            </a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('cprs.forms.*') ? 'active' : '' }}">
                            <a class="nav-link" href="#">
                                <span class="sidebar-text">Forms</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @if (auth()->user()->role == 'admin')
                <li class="nav-item  {{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <i class="icon icon-xs me-2 bi-file-earmark-text"></i>
                        </span>
                        <span class="sidebar-text">Users</span>
                    </a>
                </li>
            @endif
            <li class="nav-item  {{ request()->routeIs('pds.*') ? 'active' : '' }}">
                <a href="{{ route('pds.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="icon icon-xs me-2 bi-file-earmark-text"></i>
                    </span>
                    <span class="sidebar-text">Personal Data Sheets</span>
                </a>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            <li class="nav-item">
                <a href="{{ route('welcome') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <i class="icon icon-xs me-2 bi bi-house"></i>
                    </span>
                    <span class="sidebar-text">Homepage</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
