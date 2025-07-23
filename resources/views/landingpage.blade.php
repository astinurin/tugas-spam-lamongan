<!doctype html>

<html
  lang="en"
  class="layout-navbar-fixed layout-wide"
  dir="ltr"
  data-skin="default"
  data-assets-path="{{ asset('') }}/"
  data-template="front-pages"
  data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Landing Page - SPAM Lamongan </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logopjt.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{ asset('vendor/libs/node-waves/node-waves.css') }}"/>

    <link rel="stylesheet" href="{{ asset('vendor/libs/pickr/pickr-themes.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendor/css/pages/front-page.css') }}" />

    <!-- Vendors CSS -->

    <!-- endbuild -->


    <link rel="stylesheet" href="{{ asset('vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/pages/front-page-landing.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('vendor/js/helpers.js') }}"></script>

    <!-- Template Customizer -->
    <script src="{{ asset('vendor/js/template-customizer.js') }}"></script>

    <!-- Config -->
    <script src="{{ asset('js/front-config.js') }}"></script>

  </head>

  <body>
    <script src="{{ asset('vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('vendor/js/mega-dropdown.js') }}"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8 ms-0">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-4"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="icon-base ti tabler-menu-2 icon-lg align-middle text-heading fw-medium"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="landing-page.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('img/logopjt.png') }}" alt="Logo" class="w-auto h-auto" style="max-height: 22px;" />

            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">SPAM</span>
            </a>

          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="icon-base ti tabler-x icon-lg"></i>
            </button>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link fw-medium" aria-current="page" href="landing-page.html#landingHero">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="landing-page.html#landingFeatures">Tentang</a>
                </li>
                <li class="nav-item dropdown">
                    <a
                    href="#"
                    class="nav-link dropdown-toggle fw-medium"
                    id="hoverDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside">
                    Produk & Layanan    
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);"></a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" href="landing-page.html#landingContact">Kontak</a>
                </li>
            </ul>

          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item dropdown">
                    <a
                    href="#"
                    class="nav-link dropdown-toggle fw-medium"
                    id="hoverDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside">
                    Bahasa    
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:void(0);">INA</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">EN</a></li>
                    </ul>
                </li>
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
              <a
                class="nav-link dropdown-toggle hide-arrow"
                id="nav-theme"
                href="javascript:void(0);"
                data-bs-toggle="dropdown">
                <i class="icon-base ti tabler-sun icon-lg theme-icon-active"></i>
                <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center active"
                    data-bs-theme-value="light"
                    aria-pressed="false">
                    <span><i class="icon-base ti tabler-sun icon-md me-3" data-icon="sun"></i>Light</span>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center"
                    data-bs-theme-value="dark"
                    aria-pressed="true">
                    <span><i class="icon-base ti tabler-moon-stars icon-md me-3" data-icon="moon-stars"></i>Dark</span>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center"
                    data-bs-theme-value="system"
                    aria-pressed="false">
                    <span
                      ><i
                        class="icon-base ti tabler-device-desktop-analytics icon-md me-3"
                        data-icon="device-desktop-analytics"></i
                      >System</span
                    >
                  </button>
                </li>
              </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
              <a href="{{ route('login.form') }}" class="btn btn-primary" target="_blank"
                ><span class="tf-icons icon-base ti tabler-login scaleX-n1-rtl me-md-1"></span
                ><span class="d-none d-md-block">Login/Register</span></a
              >
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <section id="landingReviews" class="pt-2 pb-0">
                    <!-- What people say slider: Start -->
                    <div class="container">
                    <div class="row align-items-center gx-0 gy-4 g-lg-5 mb-5 pb-md-5">
                        <div class="col-md-6 col-lg-5 col-xl-3">
                        <div class="mb-4">
                            <span class="badge bg-label-primary">Produk & Layanan Kami</span>
                                </div>
                                <h4 class="mb-1">
                                    <span class="position-relative fw-extrabold z-1"
                                    >Solusi Air Bersih untuk Kebutuhan Anda
                            </span>
                        </h4>
                        <p class="mb-5 mb-md-12">
                            Komitmen kami dalam menyediakan air bersih <br class="d-none d-xl-block" />
                            yang aman dan terjangkau.
                        </p>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-9 d-flex justify-content-center justify-content-xl-end">
                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="max-width: 520px; width: 100%;">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100 img-fluid" style="max-height: 1000px; object-fit: contain;" src="{{ asset('img/illustrations/page-pricing-basic.png') }}" alt="Produk 1">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Produk 1</h3>
                                            <p>Eos mutat malis maluisset et, agam ancillae quo te.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 img-fluid" style="max-height: 1000px; object-fit: contain;" src="{{ asset('img/illustrations/page-pricing-enterprise.png') }}" alt="Produk 2">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Produk 2</h3>
                                            <p>In numquam omittam sea.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100 img-fluid" style="max-height: 1000px; object-fit: contain;" src="{{ asset('img/illustrations/page-pricing-standard.png') }}" alt="Produk 3">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Produk 3</h3>
                                            <p>Lorem ipsum dolor sit amet, minim graeco mel no.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    </div>
                    
                  
                </section>
            </div>
      </section>
      <!-- Hero: End -->

      <!-- Useful features: Start -->
      <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Tentang Kami</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >SPAM Lamongan 
             <img
                src="{{ asset('img/front-pages/icons/section-title-icon.png') }}"
                alt="laptop charging"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />

            </span>
            
          </h4>
          <p class="text-center mb-12">
            Solusi Air Bersih untuk Warga Lamongan
          </p>
            <div class="container py-5">
                <div class="row align-items-center">
                    <!-- Gambar -->
                    <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                    <img src="{{ asset('img/front-pages/landing-page/faq-boy-with-logos.png') }}" alt="faq boy with logos" class="img-fluid" style="max-width: 90%;" />
                    </div>

                    <!-- Teks -->
                    <div class="col-lg-4 text-lg-end text-center">
                    <p class="mb-4">
                        SPAM Lamongan adalah sistem penyediaan air minum <br>
                        yang melayani kebutuhan air bersih masyarakat Kabupaten Lamongan <br>
                        dengan standar mutu terbaik dan layanan prima.
                    </p>
                    <a href="{{ url('/detail-produk') }}" class="btn btn-text-primary">
                        Baca Selengkapnya &gt;
                    </a>
                    </div>
                </div>
            </div>

          
        </div>
      </section>
      <!-- Useful features: End -->

      <!-- Fun facts: Start -->
      <section id="landingFunFacts" class="section-py landing-fun-facts">
        <div class="container">
            <div class="text-center mb-4">
              <span class="badge bg-label-primary">Produk & Layanan</span>
            </div>
            <h4 class="text-center mb-1">
              <span class="position-relative fw-extrabold z-1">
                Layanan Utama SPAM Lamongan
                <img
                  src="{{ asset('img/front-pages/icons/section-title-icon.png') }}"
                  alt="produk layanan"
                  class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
              </span>
            </h4>
            <p class="text-center mb-12">
              Menyediakan distribusi air bersih, layanan pelanggan, dan solusi infrastruktur air untuk kebutuhan masyarakat Lamongan.
            </p>

            
          <div class="row mt-5">
            <div class="col-md">
              <div class="card mb-4">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img class="card-img card-img-left" src="{{ asset('img/elements/12.png') }}"  alt="Card image" />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a
                        little bit longer.
                      </p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card mb-4">
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a
                        little bit longer.
                      </p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img class="card-img card-img-right" src="{{ asset('img/elements/17.png') }}"  alt="Card image" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md">
              <div class="card mb-4">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img class="card-img card-img-left" src="{{ asset('img/elements/12.png') }}"  alt="Card image" />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a
                        little bit longer.
                      </p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card mb-4">
                <div class="row g-0">
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a
                        little bit longer.
                      </p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <img class="card-img card-img-right" src="{{ asset('img/elements/17.png') }}"  alt="Card image" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Real customers reviews: Start -->
      <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
        
      </section>
      <!-- Real customers reviews: End -->

      <!-- Contact Us: Start -->
      <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Hubungi Kami</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >Kami Siap Membantu Anda
              <img
                src="{{ asset('img/front-pages/icons/section-title-icon.png') }}"
                alt="laptop charging"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />

            </span>
          </h4>
          <p class="text-center mb-12 pb-md-4">Ada pertanyaan atau komentar? Silakan kirimkan pesan kepada kami.</p>
          <div class="row g-6">
            <div class="col-lg-5">
              <div class="contact-img-box position-relative border p-2 h-100">
                <img
                    src="{{ asset('img/front-pages/icons/contact-border.png') }}"
                    alt="contact border"
                    class="contact-border-img position-absolute d-none d-lg-block scaleX-n1-rtl" />

                <img
                    src="{{ asset('img/front-pages/landing-page/contact-customer-service.png') }}"
                    alt="contact customer service"
                    class="contact-img w-100 scaleX-n1-rtl" />

                <div class="p-4 pb-2">
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-primary rounded p-1_5 me-3">
                          <i class="icon-base ti tabler-mail icon-lg"></i>
                        </div>
                        <div>
                          <p class="mb-0">Email</p>
                          <h6 class="mb-0">
                            <a href="mailto:example@gmail.com" class="text-heading">example@gmail.com</a>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-success rounded p-1_5 me-3">
                          <i class="icon-base ti tabler-phone-call icon-lg"></i>
                        </div>
                        <div>
                          <p class="mb-0">Telepon</p>
                          <h6 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="mb-2">Kirim Pesan Anda</h4>
                  <p class="mb-6">
                    Punya pertanyaan seputar layanan air minum, tagihan, pemasangan sambungan baru, atau keluhan lainnya?<br class="d-none d-lg-block" />
    Kami siap membantu Anda. Silakan isi formulir di bawah ini.
                  </p>
                  <form>
                    <div class="row g-4">
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-fullname">Nama</label>
                        <input type="text" class="form-control" id="contact-form-fullname" placeholder="john" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-email">Email</label>
                        <input
                          type="text"
                          id="contact-form-email"
                          class="form-control"
                          placeholder="johndoe@gmail.com" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="contact-form-message">Pesan</label>
                        <textarea
                          id="contact-form-message"
                          class="form-control"
                          rows="7"
                          placeholder="Write a message"></textarea>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us: End -->
    </div>

    <!-- / Sections:End -->

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
      <div class="footer-top position-relative overflow-hidden z-1">
       <img
        src="{{ asset('img/front-pages/backgrounds/footer-bg.png') }}"
        alt="footer bg"
        class="footer-bg banner-bg-img z-n1" />

        <div class="container">
          <div class="row gx-0 gy-6 g-lg-10">
            <div class="col-lg-5">
              <a href="/" class="d-flex align-items-center text-decoration-none">
                {{-- <img src="{{ asset('img/logopjt.png') }}" alt="Logo PJT" width="32" height="22" class="me-2 align-text-top"> --}}
                <span class="fs-4 fw-bold text-light">SPAM - Lamongan</span>
              </a>

              <p class="footer-text footer-logo-description mb-6">
                Sistem Penyediaan Air Minum (SPAM) hadir untuk menyediakan akses air bersih yang aman, terjangkau, dan berkelanjutan.
              </p>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
            </div>
            <div class="col-lg-3 col-md-4">
              <h6 class="footer-title mb-6">Ikuti Kami</h6>
              <a href="https://facebook.com/spamlamongan" class="d-block mb-2 footer-link">Facebook</a>
              <a href="https://instagram.com/spamlamongan" class="d-block mb-2 footer-link">Instagram</a>
              <a href="https://youtube.com/spamlamongan" class="d-block footer-link">YouTube</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-3 py-md-5">
        <div
          class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
          <div class="mb-2 mb-md-0">
            <span class="footer-bottom-text"
              >©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
            <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white">Pixinvent,</a>
            <span class="footer-bottom-text"> Made with ❤️ for a better web.</span>
          </div>
          <div>
            <a href="https://github.com/pixinvent" class="me-1 text-white" target="_blank">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.7184 2.19556C6.12757 2.19556 2.40674 5.91639 2.40674 10.5072C2.40674 14.1789 4.78757 17.2947 8.0909 18.3947C8.50674 18.4697 8.65674 18.2139 8.65674 17.9939C8.65674 17.7964 8.65007 17.2731 8.64757 16.5806C6.33507 17.0822 5.84674 15.4656 5.84674 15.4656C5.47007 14.5056 4.92424 14.2497 4.92424 14.2497C4.17007 13.7339 4.98174 13.7456 4.98174 13.7456C5.81674 13.8039 6.25424 14.6022 6.25424 14.6022C6.9959 15.8722 8.2009 15.5056 8.67257 15.2931C8.7484 14.7556 8.96507 14.3889 9.20174 14.1814C7.35674 13.9722 5.41674 13.2589 5.41674 10.0731C5.41674 9.16722 5.74091 8.42389 6.27007 7.84389C6.1859 7.63306 5.89841 6.78722 6.35257 5.64389C6.35257 5.64389 7.05007 5.41972 8.63757 6.49472C9.31557 6.31028 10.0149 6.21614 10.7176 6.21472C11.4202 6.21586 12.1196 6.31001 12.7976 6.49472C14.3859 5.41889 15.0826 5.64389 15.0826 5.64389C15.5367 6.78722 15.2517 7.63306 15.1651 7.84389C15.6984 8.42389 16.0184 9.16639 16.0184 10.0731C16.0184 13.2672 14.0767 13.9689 12.2251 14.1747C12.5209 14.4314 12.7876 14.9381 12.7876 15.7131C12.7876 16.8247 12.7776 17.7214 12.7776 17.9939C12.7776 18.2164 12.9259 18.4747 13.3501 18.3931C16.6517 17.2914 19.0301 14.1781 19.0301 10.5072C19.0301 5.91639 15.3092 2.19556 10.7184 2.19556Z"
                  fill="currentColor" />
              </svg>
            </a>
            <a href="https://www.facebook.com/pixinvents/" class="me-1 text-white" target="_blank">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.8609 18.0262V11.1962H14.1651L14.5076 8.52204H11.8609V6.81871C11.8609 6.04704 12.0759 5.51871 13.1834 5.51871H14.5868V3.13454C13.904 3.06136 13.2176 3.02603 12.5309 3.02871C10.4943 3.02871 9.09593 4.27204 9.09593 6.55454V8.51704H6.80676V11.1912H9.10093V18.0262H11.8609Z"
                  fill="currentColor" />
              </svg>
            </a>
            <a href="https://x.com/pixinvents" class="me-1 text-white" target="_blank">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.0576 7.19293C17.0684 7.33876 17.0684 7.48376 17.0684 7.62876C17.0684 12.0663 13.6909 17.1796 7.5184 17.1796C5.61674 17.1796 3.85007 16.6288 2.3634 15.6721C2.6334 15.7029 2.8934 15.7138 3.17424 15.7138C4.68506 15.7174 6.15311 15.2122 7.34174 14.2796C6.64125 14.2669 5.96222 14.0358 5.39943 13.6185C4.83665 13.2013 4.41822 12.6187 4.20257 11.9521C4.41007 11.9829 4.6184 12.0038 4.83674 12.0038C5.13757 12.0038 5.44007 11.9621 5.7209 11.8896C4.9607 11.7361 4.27713 11.3241 3.78642 10.7235C3.29571 10.1229 3.02815 9.37097 3.02924 8.59543V8.55376C3.47674 8.80293 3.9959 8.95876 4.5459 8.9796C4.08514 8.67342 3.70734 8.25795 3.44619 7.77026C3.18504 7.28256 3.04866 6.73781 3.04924 6.1846C3.04924 5.56126 3.21507 4.9896 3.5059 4.49126C4.34935 5.52878 5.40132 6.37756 6.59368 6.98265C7.78604 7.58773 9.0922 7.93561 10.4276 8.00376C10.3759 7.75376 10.3442 7.4946 10.3442 7.2346C10.344 6.79373 10.4307 6.35715 10.5993 5.9498C10.7679 5.54245 11.0152 5.17233 11.3269 4.86059C11.6386 4.54885 12.0088 4.30161 12.4161 4.133C12.8235 3.96438 13.26 3.87771 13.7009 3.87793C14.6676 3.87793 15.5401 4.28293 16.1534 4.93793C16.9049 4.79261 17.6255 4.51828 18.2834 4.1271C18.0329 4.90278 17.5082 5.56052 16.8076 5.9771C17.4741 5.90108 18.1254 5.72581 18.7401 5.4571C18.281 6.12635 17.7122 6.71322 17.0576 7.19293Z"
                  fill="currentColor" />
              </svg>
            </a>
            <a href="https://www.instagram.com/pixinvents/" class="text-white" target="_blank">
              <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1833_185630)">
                  <path
                    d="M17.5869 6.33973C17.5774 5.62706 17.444 4.9215 17.1926 4.25456C16.9747 3.69202 16.6418 3.18112 16.2152 2.75453C15.7886 2.32793 15.2776 1.995 14.7151 1.77703C14.0568 1.5299 13.3613 1.39627 12.6582 1.38183C11.753 1.34137 11.466 1.33008 9.16819 1.33008C6.87039 1.33008 6.57586 1.33008 5.67725 1.38183C4.97451 1.39637 4.27932 1.53 3.62127 1.77703C3.05863 1.99485 2.54765 2.32772 2.12103 2.75434C1.69442 3.18096 1.36155 3.69193 1.14373 4.25456C0.896101 4.91242 0.76276 5.60776 0.749471 6.31056C0.70901 7.2167 0.696777 7.50368 0.696777 9.8015C0.696777 12.0993 0.696777 12.3928 0.749471 13.2924C0.763585 13.9963 0.89626 14.6907 1.14373 15.3503C1.36192 15.9128 1.69503 16.4236 2.1218 16.85C2.54855 17.2765 3.05957 17.6091 3.6222 17.8269C4.27846 18.084 4.97377 18.2272 5.67819 18.2504C6.58433 18.2908 6.87133 18.303 9.16913 18.303C11.4669 18.303 11.7615 18.303 12.6601 18.2504C13.3632 18.2365 14.0587 18.1032 14.717 17.8561C15.2794 17.6378 15.7902 17.3048 16.2167 16.8782C16.6433 16.4517 16.9763 15.941 17.1945 15.3785C17.442 14.7198 17.5746 14.0254 17.5888 13.3207C17.6293 12.4155 17.6414 12.1285 17.6414 9.82973C17.6396 7.53191 17.6396 7.24021 17.5869 6.33973ZM9.16255 14.1468C6.75935 14.1468 4.81251 12.2 4.81251 9.79679C4.81251 7.39359 6.75935 5.44676 9.16255 5.44676C10.3163 5.44676 11.4227 5.90506 12.2385 6.72085C13.0543 7.53664 13.5126 8.64309 13.5126 9.79679C13.5126 10.9505 13.0543 12.057 12.2385 12.8727C11.4227 13.6885 10.3163 14.1468 9.16255 14.1468ZM13.6857 6.3002C13.5525 6.30033 13.4206 6.27417 13.2974 6.22325C13.1743 6.17231 13.0624 6.09759 12.9682 6.00338C12.874 5.90917 12.7992 5.79729 12.7483 5.67417C12.6974 5.55105 12.6712 5.41909 12.6713 5.28585C12.6713 5.15271 12.6976 5.02087 12.7485 4.89786C12.7994 4.77485 12.8742 4.66308 12.9683 4.56893C13.0625 4.47479 13.1743 4.4001 13.2973 4.34915C13.4202 4.2982 13.5521 4.27197 13.6853 4.27197C13.8184 4.27197 13.9503 4.2982 14.0732 4.34915C14.1962 4.4001 14.3081 4.47479 14.4022 4.56893C14.4963 4.66308 14.571 4.77485 14.622 4.89786C14.6729 5.02087 14.6991 5.15271 14.6991 5.28585C14.6991 5.84666 14.2456 6.3002 13.6857 6.3002Z"
                    fill="currentColor" />
                  <path
                    d="M9.16296 12.6226C10.7236 12.6226 11.9887 11.3575 11.9887 9.79688C11.9887 8.23629 10.7236 6.97119 9.16296 6.97119C7.60238 6.97119 6.33728 8.23629 6.33728 9.79688C6.33728 11.3575 7.60238 12.6226 9.16296 12.6226Z"
                    fill="currentColor" />
                </g>
                <defs>
                  <clipPath id="clip0_1833_185630">
                    <rect width="16.9412" height="18" fill="currentColor" transform="translate(0.696777 0.528809)" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->
    <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('vendor/libs/@algolia/autocomplete-js.js') }}"></script>

    <script src="{{ asset('vendor/libs/pickr/pickr.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/front-main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('js/front-page-landing.js') }}"></script>

    {{-- Dropdown --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dropdowns = document.querySelectorAll(".nav-item.dropdown");

            dropdowns.forEach(function (dropdown) {
                const toggle = dropdown.querySelector(".dropdown-toggle");
                const menu = dropdown.querySelector(".dropdown-menu");

                dropdown.addEventListener("mouseenter", function () {
                    toggle.classList.add("show");
                    menu.classList.add("show");
                });

                dropdown.addEventListener("mouseleave", function () {
                    toggle.classList.remove("show");
                    menu.classList.remove("show");
                });
            });
        });
    </script>



  </body>
</html>
