<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('dashboard')}}">
            <span class="align-middle">Admin</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Sayfalar
            </li>
{{-- 
            <li class="sidebar-item ">
                <a class="sidebar-link" href="index.html">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Hasta Liste</span>
                </a>
            </li> --}}

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('profile.edit')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profil Düzenle</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('yorumliste')}}">
                    <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Yorumlar</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('randevuliste')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Randevular</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
