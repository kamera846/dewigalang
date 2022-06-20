@extends('layouts.main')

@section('page-content')

<section class="wrapper bg-soft-green">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                <h1 class="mb-3">Get in Touch</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            About Us
                        </li>
                    </ol>
                </nav>
                <!-- /nav -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light angled upper-end">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div
                class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative"
            >
                <div
                    class="shape bg-soft-primary rounded-circle rellax w-20 h-20"
                    data-rellax-speed="1"
                    style="top: -2rem; right: -1.9rem"
                ></div>
                <figure class="rounded">
                    <img
                        src="./assets/img/photos/about7.jpg"
                        srcset="./assets/img/photos/about7@2x.jpg 2x"
                        alt=""
                    />
                </figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="mb-3">Who Are We?</h2>
                <p class="lead fs-lg">
                    We are a digital and branding company that believes in the
                    power of creative strategy and along with great design.
                </p>
                <p class="mb-6">
                    Cum sociis natoque penatibus et magnis dis parturient
                    montes, nascetur ridiculus mus. Cras justo odio, dapibus ac
                    facilisis in, egestas eget quam. Praesent commodo cursus
                    magna, vel scelerisque nisl consectetur et.
                </p>
                <div class="row gx-xl-10 gy-6">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img
                                    src="./assets/img/icons/lineal/target.svg"
                                    class="svg-inject icon-svg icon-svg-sm me-4"
                                    alt=""
                                />
                            </div>
                            <div>
                                <h4 class="mb-1">Our Mission</h4>
                                <p class="mb-0">
                                    Dapibus eu leo quam ornare curabitur blandit
                                    tempus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img
                                    src="./assets/img/icons/lineal/award-2.svg"
                                    class="svg-inject icon-svg icon-svg-sm me-4"
                                    alt=""
                                />
                            </div>
                            <div>
                                <h4 class="mb-1">Our Values</h4>
                                <p class="mb-0">
                                    Aenean lacinia bibendum nulla sed
                                    consectetur.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-soft-green angled upper-end lower-end">
    <div class="container pt-14 pt-md-16 pb-3 pb-md-3">
        <div class="row">
            <div
                class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center"
            >
                <h2 class="fs-15 text-uppercase text-muted mb-3">
                    What We Do?
                </h2>
                <h3 class="mb-10">
                    The service we offer is specifically designed to meet your
                    needs.
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gy-8 text-center mb-14 mb-md-17">
            <div class="col-md-6 col-xl-3">
                <div class="icon btn btn-circle btn-lg btn-green disabled mb-5">
                    <i class="uil uil-phone-volume"></i>
                </div>
                <h4>24/7 Support</h4>
                <p class="mb-3">
                    Etiam porta sem malesuada magna mollis euismod. Donec
                    ullamcorper nulla non metus auctor fringilla.
                </p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="icon btn btn-circle btn-lg btn-green disabled mb-5">
                    <i class="uil uil-shield-exclamation"></i>
                </div>
                <h4>Secure Payments</h4>
                <p class="mb-3">
                    Etiam porta sem malesuada magna mollis euismod. Donec
                    ullamcorper nulla non metus auctor fringilla.
                </p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="icon btn btn-circle btn-lg btn-green disabled mb-5">
                    <i class="uil uil-laptop-cloud"></i>
                </div>
                <h4>Daily Updates</h4>
                <p class="mb-3">
                    Etiam porta sem malesuada magna mollis euismod. Donec
                    ullamcorper nulla non metus auctor fringilla.
                </p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/column -->
            <div class="col-md-6 col-xl-3">
                <div class="icon btn btn-circle btn-lg btn-green disabled mb-5">
                    <i class="uil uil-chart-line"></i>
                </div>
                <h4>Market Research</h4>
                <p class="mb-3">
                    Etiam porta sem malesuada magna mollis euismod. Donec
                    ullamcorper nulla non metus auctor fringilla.
                </p>
                <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section id="snippet-2" class="wrapper bg-light wrapper-border angled upper-end lower-end">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                <h2 class="fs-15 text-uppercase text-muted mb-3">
                    Latest Projects
                </h2>
                <h3 class="mb-10">
                    Check out some of our awesome projects with
                    <span class="underline-3 style-2 yellow">creative</span>
                    ideas and great design.
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div
            class="swiper-container grid-view mb-6 swiper-container-0"
            data-margin="30"
            data-dots="true"
            data-items-xl="3"
            data-items-md="2"
            data-items-xs="1"
        >
            <div
                class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
            >
                <div
                    class="swiper-wrapper"
                    id="swiper-wrapper-38ece5f5e2c97e5d"
                    aria-live="off"
                    style="
                        cursor: grab;
                        transform: translate3d(-880px, 0px, 0px);
                        transition-duration: 0ms;
                    "
                >
                    <div
                        class="swiper-slide"
                        role="group"
                        aria-label="1 / 6"
                        style="width: 410px; margin-right: 30px"
                    >
                        <figure class="rounded mb-6">
                            <img
                                src="../../assets/img/photos/pd7.jpg"
                                srcset="../../assets/img/photos/pd7@2x.jpg 2x"
                                alt=""
                            /><a
                                class="item-link"
                                href="../../assets/img/photos/pd7-full.jpg"
                                data-glightbox=""
                                data-gallery="projects-group"
                                ><i class="uil uil-focus-add"></i
                            ></a>
                        </figure>
                        <div
                            class="project-details d-flex justify-content-center flex-column"
                        >
                            <div class="post-header">
                                <h2 class="post-title h3">
                                    <a
                                        href="../../single-project.html"
                                        class="link-dark"
                                        >Cras Fermentum Sem</a
                                    >
                                </h2>
                                <div class="post-category text-ash">
                                    Stationary
                                </div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div
                        class="swiper-slide swiper-slide-prev"
                        role="group"
                        aria-label="2 / 6"
                        style="width: 410px; margin-right: 30px"
                    >
                        <figure class="rounded mb-6">
                            <img
                                src="../../assets/img/photos/pd8.jpg"
                                srcset="../../assets/img/photos/pd8@2x.jpg 2x"
                                alt=""
                            /><a
                                class="item-link"
                                href="../../assets/img/photos/pd8-full.jpg"
                                data-glightbox=""
                                data-gallery="projects-group"
                                ><i class="uil uil-focus-add"></i
                            ></a>
                        </figure>
                        <div
                            class="project-details d-flex justify-content-center flex-column"
                        >
                            <div class="post-header">
                                <h2 class="post-title h3">
                                    <a
                                        href="../../single-project2.html"
                                        class="link-dark"
                                        >Mollis Ipsum Mattis</a
                                    >
                                </h2>
                                <div class="post-category text-ash">
                                    Magazine, Book
                                </div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div
                        class="swiper-slide swiper-slide-active"
                        style="width: 410px; margin-right: 30px"
                        role="group"
                        aria-label="3 / 6"
                    >
                        <figure class="rounded mb-6">
                            <img
                                src="../../assets/img/photos/pd9.jpg"
                                srcset="../../assets/img/photos/pd9@2x.jpg 2x"
                                alt=""
                            /><a
                                class="item-link"
                                href="../../assets/img/photos/pd9-full.jpg"
                                data-glightbox=""
                                data-gallery="projects-group"
                                ><i class="uil uil-focus-add"></i
                            ></a>
                        </figure>
                        <div
                            class="project-details d-flex justify-content-center flex-column"
                        >
                            <div class="post-header">
                                <h2 class="post-title h3">
                                    <a
                                        href="../../single-project3.html"
                                        class="link-dark"
                                        >Ipsum Ultricies Cursus</a
                                    >
                                </h2>
                                <div class="post-category text-ash">
                                    Packaging
                                </div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div
                        class="swiper-slide swiper-slide-next"
                        role="group"
                        aria-label="4 / 6"
                        style="width: 410px; margin-right: 30px"
                    >
                        <figure class="rounded mb-6">
                            <img
                                src="../../assets/img/photos/pd10.jpg"
                                srcset="../../assets/img/photos/pd10@2x.jpg 2x"
                                alt=""
                            /><a
                                class="item-link"
                                href="../../assets/img/photos/pd10-full.jpg"
                                data-glightbox=""
                                data-gallery="projects-group"
                                ><i class="uil uil-focus-add"></i
                            ></a>
                        </figure>
                        <div
                            class="project-details d-flex justify-content-center flex-column"
                        >
                            <div class="post-header">
                                <h2 class="post-title h3">
                                    <a
                                        href="../../single-project.html"
                                        class="link-dark"
                                        >Inceptos Euismod Egestas</a
                                    >
                                </h2>
                                <div class="post-category text-ash">
                                    Stationary, Branding
                                </div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div
                        class="swiper-slide"
                        role="group"
                        aria-label="5 / 6"
                        style="width: 410px; margin-right: 30px"
                    >
                        <figure class="rounded mb-6">
                            <img
                                src="../../assets/img/photos/pd11.jpg"
                                srcset="../../assets/img/photos/pd11@2x.jpg 2x"
                                alt=""
                            /><a
                                class="item-link"
                                href="../../assets/img/photos/pd11-full.jpg"
                                data-glightbox=""
                                data-gallery="projects-group"
                                ><i class="uil uil-focus-add"></i
                            ></a>
                        </figure>
                        <div
                            class="project-details d-flex justify-content-center flex-column"
                        >
                            <div class="post-header">
                                <h2 class="post-title h3">
                                    <a
                                        href="../../single-project2.html"
                                        class="link-dark"
                                        >Ipsum Mollis Vulputate</a
                                    >
                                </h2>
                                <div class="post-category text-ash">
                                    Packaging
                                </div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div
                        class="swiper-slide"
                        role="group"
                        aria-label="6 / 6"
                        style="width: 410px; margin-right: 30px"
                    >
                        <figure class="rounded mb-6">
                            <img
                                src="../../assets/img/photos/pd12.jpg"
                                srcset="../../assets/img/photos/pd12@2x.jpg 2x"
                                alt=""
                            /><a
                                class="item-link"
                                href="../../assets/img/photos/pd12-full.jpg"
                                data-glightbox=""
                                data-gallery="projects-group"
                                ><i class="uil uil-focus-add"></i
                            ></a>
                        </figure>
                        <div
                            class="project-details d-flex justify-content-center flex-column"
                        >
                            <div class="post-header">
                                <h2 class="post-title h3">
                                    <a
                                        href="../../single-project3.html"
                                        class="link-dark"
                                        >Porta Ornare Cras</a
                                    >
                                </h2>
                                <div class="post-category text-ash">
                                    Branding
                                </div>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
                <span
                    class="swiper-notification"
                    aria-live="assertive"
                    aria-atomic="true"
                ></span>
            </div>
            <!-- /.swiper -->
            <div class="swiper-controls">
                <div
                    class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"
                >
                    <span
                        class="swiper-pagination-bullet"
                        tabindex="0"
                        role="button"
                        aria-label="Go to slide 1"
                    ></span
                    ><span
                        class="swiper-pagination-bullet"
                        tabindex="0"
                        role="button"
                        aria-label="Go to slide 2"
                    ></span
                    ><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active"
                        tabindex="0"
                        role="button"
                        aria-label="Go to slide 3"
                        aria-current="true"
                    ></span
                    ><span
                        class="swiper-pagination-bullet"
                        tabindex="0"
                        role="button"
                        aria-label="Go to slide 4"
                    ></span>
                </div>
            </div>
        </div>
        <!-- /.swiper-container -->
    </div>
    <!-- /.container -->
</section>

@endsection
