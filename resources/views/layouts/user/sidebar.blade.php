
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
        <li class="menu-item {{ request()->is('user/dashboard*') ? '' : '' }}">
            <a href="{{ url('/user/dashboard') }}" class="menu-link">
                 <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-smart-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" /><path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" /></svg>
                <span class="fw-bold">Dashboard {{ Auth::user()->role }}</span>
            </a>
        </li>
       
        <li class="menu-item {{ request()->is('*') ? '' : '' }}">
            <a href="{{ url('') }}" class="menu-link">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-comet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15.5 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z" /><path d="M4 4l7 7" /><path d="M9 4l3.5 3.5" /><path d="M4 9l3.5 3.5" /></svg>
                <div>Fitur User 1</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('*') ? '' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-comet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15.5 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z" /><path d="M4 4l7 7" /><path d="M9 4l3.5 3.5" /><path d="M4 9l3.5 3.5" /></svg>
                <div>Fitur User 2</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('*') ? '' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-comet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15.5 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z" /><path d="M4 4l7 7" /><path d="M9 4l3.5 3.5" /><path d="M4 9l3.5 3.5" /></svg>
                <div>Fitur User 3</div>
            </a>
        </li>
    </ul>
  </ul>
</aside>

