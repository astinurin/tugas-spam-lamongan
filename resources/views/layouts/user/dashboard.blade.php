<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Dashboard')</title>

    @include('layouts.assets.css')
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            {{-- Sidebar --}}
            @include('layouts.user.sidebar')

            {{-- Layout Page --}}
            <div class="layout-page">
                {{-- Navbar --}}
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav align-items-center">
                        <span class="fw-bold">Dashboard {{ Auth::user()->role }}</span>
                    </div>
                </nav>

                {{-- Content --}}
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>

                    {{-- Footer --}}
                    <footer class="content-footer footer bg-light">
                        <div class="container-xxl d-flex justify-content-between py-2">
                            <div>
                                &copy; {{ date('Y') }} SPAM. All rights reserved.
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.assets.js')
</body>
</html>
