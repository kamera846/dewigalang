<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website."
        />
        <meta
            name="keywords"
            content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template"
        />
        <meta name="author" content="elemis" />
        <title>Sandbox - Dewi Galang</title>
        <link
            rel="shortcut icon"
            href="{{ asset('./assets/img/favicon.png') }}"
        />
        <link rel="stylesheet" href="{{ asset('./assets/css/plugins.css') }}" />
        <link rel="stylesheet" href="{{ asset('./assets/css/style.css') }}" />
        <link
            rel="preload"
            href="{{ asset('./assets/css/fonts/dm.css') }}"
            as="style"
            onload="this.rel='stylesheet'"
        />
    </head>

    <body>
        <div class="content-wrapper">
            <header class="wrapper bg-soft-green">
                <nav
                    class="navbar navbar-expand-lg classic transparent navbar-light"
                >
                    <div
                        class="container flex-lg-row flex-nowrap align-items-center"
                    >
                        <div class="navbar-brand w-100">
                            <a href="./index.html">
                                <img
                                    src="{{
                                        asset('./assets/img/logo-dark.png')
                                    }}"
                                    srcset="{{ asset('./assets/img/logo-dark@2x.png') }} 2x"
                                    alt=""
                                />
                            </a>
                        </div>
                        <div
                            class="navbar-collapse offcanvas offcanvas-nav offcanvas-start"
                        >
                            <div class="offcanvas-header d-lg-none d-xl-none">
                                <a href="./index.html"
                                    ><img
                                        src="{{
                                            asset('./assets/img/logo-dark.png')
                                        }}"
                                        srcset="
                                            {{ asset('./assets/img/logo-dark@2x.png') }} 2x
                                        "
                                        alt=""
                                /></a>
                                <button
                                    type="button"
                                    class="btn-close btn-close-white"
                                    data-bs-dismiss="offcanvas"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div
                                class="offcanvas-body mx-lg-auto d-flex flex-column h-100"
                            >
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/"
                                            >Beranda</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about"
                                            >Tentang</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/blog"
                                            >Artikel</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/gallery"
                                            >Galeri</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact"
                                            >Kontak</a
                                        >
                                    </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div
                                    class="d-lg-none mt-auto pt-6 pb-6 order-4"
                                >
                                    <a
                                        href="mailto:first.last@email.com"
                                        class="link-inverse"
                                        >info@email.com</a
                                    >
                                    <br />
                                    00 (123) 456 78 90 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"
                                            ><i class="uil uil-twitter"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="uil uil-facebook-f"></i
                                        ></a>
                                        <a href="#"
                                            ><i class="uil uil-instagram"></i
                                        ></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                                <!-- /offcanvas-nav-other -->
                            </div>
                            <!-- /.offcanvas-body -->
                        </div>
                        <!-- /.navbar-collapse -->
                        <div
                            class="navbar-other ms-auto w-100 d-none d-lg-block"
                        >
                            <nav
                                class="nav social social-muted justify-content-end text-end"
                            >
                                <a href="#"><i class="uil uil-twitter"></i></a>
                                <a href="#"
                                    ><i class="uil uil-facebook-f"></i
                                ></a>
                                <a href="#"
                                    ><i class="uil uil-instagram"></i
                                ></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                        <!-- /.navbar-other -->
                        <div class="navbar-other ms-lg-4">
                            <ul
                                class="navbar-nav flex-row align-items-center ms-auto"
                            >
                                <li class="nav-item d-lg-none">
                                    <button class="hamburger offcanvas-nav-btn">
                                        <span></span>
                                    </button>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                        </div>
                        <!-- /.navbar-other -->
                    </div>
                    <!-- /.container -->
                </nav>
                <!-- /.navbar -->
            </header>
            <!-- /header -->

            @yield('page-content')
        </div>
        <!-- end content wrapper -->

        <footer class="bg-soft-green">
            <div class="container pb-7 pt-17">
                <div class="row gx-lg-0 gy-6">
                    <div class="col-lg-4">
                        <div class="widget">
                            <img
                                class="mb-4"
                                src="./assets/img/logo.png"
                                srcset="./assets/img/logo@2x.png 2x"
                                alt=""
                            />
                            <p class="lead mb-0">
                                We are trusted by over 5000+ clients. Join them
                                by using our services and grow your business.
                            </p>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-lg-3 offset-lg-2">
                        <div class="widget">
                            <div class="d-flex flex-row">
                                <div>
                                    <div
                                        class="icon text-primary fs-28 me-4 mt-n1"
                                    >
                                        <i class="uil uil-phone-volume"></i>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="mb-1">Phone</h5>
                                    <p class="mb-0">
                                        00 (123) 456 78 90 <br />00 (987) 654 32
                                        10
                                    </p>
                                </div>
                            </div>
                            <!--/div -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="d-flex flex-row">
                                <div>
                                    <div
                                        class="icon text-primary fs-28 me-4 mt-n1"
                                    >
                                        <i class="uil uil-location-pin-alt"></i>
                                    </div>
                                </div>
                                <div
                                    class="align-self-start justify-content-start"
                                >
                                    <h5 class="mb-1">Address</h5>
                                    <address>
                                        Moonshine St. 14/05 Light City, London,
                                        United Kingdom
                                    </address>
                                </div>
                            </div>
                            <!--/div -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->
                </div>
                <!--/.row -->
                <hr class="mt-13 mt-md-14 mb-7" />
                <div
                    class="d-md-flex align-items-center justify-content-between"
                >
                    <p class="mb-2 mb-lg-0">
                        © 2021 Sandbox. All rights reserved.
                    </p>
                    <nav class="nav social social-muted mb-0 text-md-end">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
            </div>
            <!-- /.container -->
        </footer>
        <div class="progress-wrap">
            <svg
                class="progress-circle svg-content"
                width="100%"
                height="100%"
                viewBox="-1 -1 102 102"
            >
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <script src="{{ asset('./assets/js/plugins.js') }}"></script>
        <script src="{{ asset('./assets/js/theme.js') }}"></script>
        <script src="{{ asset('./assets/js/custom.js') }}"></script>
    </body>
</html>
