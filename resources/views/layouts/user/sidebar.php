
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
        <li class="menu-item {{ request()->is('user/dashboard*') ? 'active' : '' }}">
            <a href="{{ url('/user/dashboard') }}" class="menu-link">
                <i class='menu-icon bx bx-home-alt'></i>
                <span class="fw-bold">Dashboard {{ Auth::user()->role }}</span>
            </a>
        </li>
       
        <li class="menu-item {{ request()->is('*') ? 'active' : '' }}">
            <a href="{{ url('') }}" class="menu-link">
                <i class='menu-icon bx bx-user'></i>
                <div>Fitur User 1</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('*') ? 'active' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <i class='menu-icon bx bx-water'></i>
                <div>Fitur User 2</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('*') ? 'active' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <i class='menu-icon bx bx-receipt'></i>
                <div>Fitur User 3</div>
            </a>
        </li>
    </ul>
  </ul>
</aside>

