<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo"
                style="width: 45px !important; height: 45px !important; display: flex !important; align-items: center;">

                <svg width="45" height="45" style="width: 45px !important; height: 45px !important;"
                    viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg">

                    <defs>
                        <linearGradient id="gradBlue" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#007bff;stop-opacity:1" />
                            <stop offset="100%" style="stop-color:#0056b3;stop-opacity:1" />
                        </linearGradient>
                    </defs>

                    <path d="M256,448 Q150,448 64,380 V120 Q150,180 256,180 Q362,180 448,120 V380 Q362,448 256,448"
                        fill="#28a745" />
                    <path d="M256,448 Q150,448 64,380 V120 Q150,180 256,180 L256,448" fill="#007bff" opacity="0.8" />
                    <path
                        d="M256,40 C180,40 120,100 120,180 C120,280 256,400 256,400 C256,400 392,280 392,180 C392,100 332,40 256,40 Z"
                        fill="url(#gradBlue)" />
                    <circle cx="256" cy="150" r="35" fill="white" />
                    <path d="M200,230 Q256,190 312,230 Q256,260 200,230" fill="white" />
                    <path d="M280,320 Q380,300 450,150 L470,200 L480,120 L400,130 L430,165 Q360,280 280,300 Z"
                        fill="#ff8c00" />
                </svg>
            </span>

            <span class="app-brand-text demo menu-text fw-bolder ms-1 fs-4">Smart Guidance</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @if (request()->routeIs('admin.dashboard')) active @endif">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->


        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Admin</span></li>
        <!-- Cards -->
        <li class="menu-item @if (request()->routeIs('admin.categories.*')) active @endif">
            <a href="{{ route('admin.categories.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Basic">Kategori</div>
            </a>
        </li>
        <li class="menu-item @if (request()->routeIs('admin.majors.*')) active @endif">
            <a href="{{ route('admin.majors.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-library"></i>
                <div data-i18n="Basic">Jurusan</div>
            </a>
        </li>
    </ul>
</aside>
