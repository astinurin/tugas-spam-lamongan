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
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-smart-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" /><path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" /></svg>
                <span class="fw-bold">Dashboard {{ Auth::user()->role }}</span>
            </a>
        </li>
       
        <li class="menu-item {{ request()->is('admin/pelanggan*') ? 'active' : '' }}">
            <a href="{{ url('/admin/pelanggan') }}" class="menu-link">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-group"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
                <div>Pelanggan</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/penggunaan*') ? 'active' : '' }}">
            <a href="{{ url('/admin/penggunaan') }}" class="menu-link">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-ripple"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7c3 -2 6 -2 9 0s6 2 9 0" /><path d="M3 17c3 -2 6 -2 9 0s6 2 9 0" /><path d="M3 12c3 -2 6 -2 9 0s6 2 9 0" /></svg>
                <div>Fitur Admin 2</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/tagihan*') ? 'active' : '' }}">
            <a href="{{ url('/admin/tagihan') }}" class="menu-link">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-receipt"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" /></svg>
                <div>Fitur Admin 3</div>
            </a>
        </li>
    </ul>
  </ul>
</aside>
