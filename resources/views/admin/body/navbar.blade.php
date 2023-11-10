<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">

            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                    data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                    data-bs-toggle="dropdown">
                    <img src="{{ asset('backend/img/avatars') }}/mesut2.jpg"
                        class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span
                        class="text-dark">Mesut YILDIZ</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{route('profile.edit')}}"><i class="align-middle me-1"
                            data-feather="user"></i> Profil Düzenle</a>
                    {{-- <a class="dropdown-item" href="#"><i class="align-middle me-1"
                            data-feather="trash-2"></i> Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                            data-feather="settings"></i> Settings & Privacy</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1"
                            data-feather="help-circle"></i> Help Center</a>
                    <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item" href="{{route('admin.logout')}}">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>