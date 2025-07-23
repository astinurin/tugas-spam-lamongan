@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/libs/node-waves/node-waves.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/css/pages/front-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/css/pages/front-page-landing.css') }}" />
@endpush

@push('scripts')
    <script src="{{ asset('vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('js/front-config.js') }}"></script>
    <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('vendor/libs/@algolia/autocomplete-js.js') }}"></script>
    <script src="{{ asset('vendor/libs/pickr/pickr.js') }}"></script>
    <script src="{{ asset('vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('js/front-main.js') }}"></script>
    <script src="{{ asset('js/front-page-landing.js') }}"></script>
@endpush

<aside id="layout-menu" class="layout-menu menu-vertical bg-menu-theme py-4 overflow-hidden">
  

  <div class="app-brand justify-content-center mb-3">
    <a href="{{ url('/') }}" class="app-brand-link d-flex flex-column align-items-center text-decoration-none">
        <img src="{{ asset('img/logopjt.png') }}" alt="Logo" height="48" class="mb-1">
        <span style="font-size: 18px; color: #6c757d;" class="fw-semibold text-muted mt-1">SPAM - Lamongan</span>
    </a>
    </div>


  <div class="menu-inner-shadow">
    
  </div>


  <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
            <a href="{{ url('/admin/dashboard') }}" class="menu-link">
                <i class='menu-icon bx bx-home-alt'></i>
                <span class="fw-bold">Dashboard {{ Auth::user()->role }}</span>
            </a>
        </li>
       
        <li class="menu-item {{ request()->is('admin/pelanggan*') ? 'active' : '' }}">
            <a href="{{ url('/admin/pelanggan') }}" class="menu-link">
                <i class='menu-icon bx bx-user'></i>
                <div>Pelanggan</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/penggunaan*') ? 'active' : '' }}">
            <a href="{{ url('/admin/penggunaan') }}" class="menu-link">
                <i class='menu-icon bx bx-water'></i>
                <div>Fitur Admin 2</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/tagihan*') ? 'active' : '' }}">
            <a href="{{ url('/admin/tagihan') }}" class="menu-link">
                <i class='menu-icon bx bx-receipt'></i>
                <div>Fitur Admin 3</div>
            </a>
        </li>
    </ul>
  </ul>
</aside>
