@extends('layouts.main')

@section('page-content')

<section class="wrapper bg-soft-green angled lower-start">
    <div class="container pt-7 pt-md-11 pb-8">
        <div class="row gx-0 gy-10 align-items-center">
            <div
                class="col-lg-6"
                data-cues="slideInDown"
                data-group="page-title"
                data-delay="600"
            >
                <h1 class="mb-4">
                    Sandbox focuses on <br /><span
                        class="typer text-primary text-nowrap"
                        data-delay="100"
                        data-words="customer satisfaction,business needs,creative ideas"
                    ></span
                    ><span
                        class="cursor text-primary"
                        data-owner="typer"
                    ></span>
                </h1>
                <p class="lead fs-24 lh-sm mb-7 pe-md-18 pe-lg-0 pe-xxl-15">
                    We carefully consider our solutions to support each and
                    every stage of your growth.
                </p>
                <div>
                    <a class="btn btn-lg btn-primary rounded">Get Started</a>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                <div class="position-relative">
                    <!-- <a
                        href="./assets/media/movie.mp4"
                        class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute"
                        style="
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            z-index: 3;
                        "
                        data-glightbox
                        ><i class="icn-caret-right"></i
                    ></a> -->
                    <figure class="rounded shadow-lg">
                        <img
                            src="./assets/img/photos/about13.jpg"
                            srcset="./assets/img/photos/about13@2x.jpg 2x"
                            alt=""
                        />
                    </figure>
                </div>
                <!-- /div -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper mt-20">
    <div class="container pt-14 pt-md-16 pb-3 pb-md-3">
        <div class="row gx-md-8 gy-8 text-center mb-14 mb-md-17">
            <div class="col-md-6 col-lg-4 text-start pe-md-10">
                <h4>Spot Wisata</h4>
                <p>
                    <ul class="ps-3">
                        <li>Istana Ular</li>
                        <li>Sawah Beo Galang</li>
                        <li>Spot Foto Istana Ular</li>
                    </ul>
                </p>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4 text-start pe-md-10">
                <h4>Fasilitas</h4>
                <p>
                    <ul class="ps-3 ">
                        <li>Areal Parkir</li>
                        <li>Balai Pertemuan</li>
                        <li>Kamar Mandi Umum</li>
                        <li>Kios Souvenir</li>
                        <li>Tempat Makan (Kuliner, Warung)</li>
                        <li>Selfie Area & Spot Foto</li>
                    </ul>
                </p>
            </div>
            <div class="col-md-6 col-lg-4 text-start pe-md-10">
                <h4>Makanan Khas & Souvenir</h4>
                <p>
                    Makanan khas:
                    <ul class="ps-3 mb-0">
                        <li>Rebok</li>
                        <li>Serabe</li>
                    </ul>
                    Adapun souvenir:
                    <ul class="ps-3 mb-0">
                        <li>Selendang</li>
                        <li>Selempang</li>
                    </ul>
                </p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper bg-light mt-3 angled upper-end lower-end">
    <div class="container">
        <div
            class="row pt-8 pt-md-14 pb-20 gx-lg-8 gx-xl-12 gy-10 align-items-center"
        >
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
                <h2 class="mb-3">Cerita Desa</h2>
                <p class="lead fs-lg pe-lg-10">
                    Konon, keberadaan istana ular pertama kali terjadi karena sebuah peristiwa pada Suku Ronggot. Sebagaimana diyakini dan diceritakan masyarakat setempat, kisah ini adalah legenda tentang dua orang kakak beradik yang melakukan hubungan sedarah, kemudian diasingkan dan mengungsi ke sebuah goa.
                </p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
    <div class="container py-10 py-md-12">
        <div class="row mb-4">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
                <h3 class="text-center">
                    Momen-momen yang berhasil kami abadikan
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="grid grid-view projects-masonry">
            <div
                class="row gx-md-8 gy-10 gy-md-13 isotope"
                style="position: relative; height: 1147.05px"
            >
                <div
                    class="project item col-md-6 col-xl-4 product"
                    style="position: absolute; left: 0%; top: 0px"
                >
                    <figure class="lift rounded mb-6">
                        <a href="../../assets/img/photos/cs16.jpg" data-glightbox="title: Title; description: Description" data-gallery="g1">
                            <img src="../../assets/img/photos/cs16.jpg" alt=""/>
                        </a>
                        </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h3 class="h5">Cras Fermentum Sem</h3>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.project -->
                <div
                    class="project item col-md-6 col-xl-4 workshop"
                    style="position: absolute; left: 33.3333%; top: 0px"
                >
                    <figure class="lift rounded mb-6">
                        <a href="../../assets/img/photos/cs17.jpg" data-glightbox="title: Title; description: Description" data-gallery="g1">
                            <img src="../../assets/img/photos/cs17.jpg" alt=""/>
                        </a>
                        </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h3 class="h5">Mollis Ipsum Mattis</h3>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.project -->
                <div
                    class="project item col-md-6 col-xl-4 still-life"
                    style="position: absolute; left: 66.6667%; top: 0px"
                >
                    <figure class="lift rounded mb-6">
                        <a href="../../assets/img/photos/cs18.jpg" data-glightbox="title: Title; description: Description" data-gallery="g1">
                            <img src="../../assets/img/photos/cs18.jpg" alt=""/>
                        </a>
                        </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h3 class="h5">
                                Ipsum Ultricies Cursus
                            </h3>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.project -->
                <div
                    class="project item col-md-6 col-xl-4 product"
                    style="position: absolute; left: 66.6667%; top: 499.812px"
                >
                    <figure class="lift rounded mb-6">
                        <a href="../../assets/img/photos/cs20.jpg" data-glightbox="title: Title; description: Description" data-gallery="g1">
                            <img src="../../assets/img/photos/cs20.jpg" alt=""/>
                        </a>
                        </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h3 class="h5">
                                Inceptos Euismod Egestas
                            </h3>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.project -->
                <div
                    class="project item col-md-6 col-xl-4 product"
                    style="position: absolute; left: 0%; top: 581.125px"
                >
                    <figure class="lift rounded mb-6">
                        <a href="../../assets/img/photos/cs19.jpg" data-glightbox="title: Title; description: Description" data-gallery="g1">
                            <img src="../../assets/img/photos/cs19.jpg" alt=""/>
                        </a>
                        </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h3 class="h5">
                                Sollicitudin Ornare Porta
                            </h3>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.project -->
                <div
                    class="project item col-md-6 col-xl-4 workshop"
                    style="position: absolute; left: 33.3333%; top: 634.797px"
                >
                    <figure class="lift rounded mb-6">
                        <a href="../../assets/img/photos/cs21.jpg" data-glightbox="title: Title; description: Description" data-gallery="g1">
                            <img src="../../assets/img/photos/cs21.jpg" alt=""/>
                        </a>
                        </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h3 class="h5">
                                Ipsum Mollis Vulputate
                            </h3>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.project -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.grid -->
    </div>
    <!-- /.content-wrapper -->
    <div class="container pt-12 pt-md-14 pb-13 pb-md-15">
        <div class="row mb-5">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                <h3 class="mb-10">
                    Artikel Terbaru
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="blog grid grid-view">
                    <div class="row isotope gx-md-8 gy-8 mb-8">
                        <article class="item post col-lg-4 col-md-6">
                            <div class="card">
                                <figure
                                    class="card-img-top overlay overlay-1 hover-scale"
                                >
                                    <a href="#">
                                        <img
                                            src="./assets/img/photos/b5.jpg"
                                            alt=""
                                    /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Selengkapnya</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a
                                                class="link-dark"
                                                href="./blog-post.html"
                                                >Nullam id dolor elit id nibh</a
                                            >
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Mauris convallis non ligula non
                                            interdum. Gravida vulputate
                                            convallis tempus vestibulum cras
                                            imperdiet nun eu dolor. Aenean
                                            lacinia bibendum nulla sed.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i
                                            ><span>29 Mar 2021</span>
                                        </li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                        <article class="item post col-lg-4 col-md-6">
                            <div class="card">
                                <figure
                                    class="card-img-top overlay overlay-1 hover-scale"
                                >
                                    <a href="#">
                                        <img
                                            src="./assets/img/photos/b6.jpg"
                                            alt=""
                                    /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Selengkapnya</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a
                                                class="link-dark"
                                                href="./blog-post.html"
                                                >Ultricies fusce porta elit</a
                                            >
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Mauris convallis non ligula non
                                            interdum. Gravida vulputate
                                            convallis tempus vestibulum cras
                                            imperdiet nun eu dolor. Aenean
                                            lacinia bibendum nulla sed.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i
                                            ><span>26 Feb 2021</span>
                                        </li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                        <article class="item post col-lg-4 col-md-6">
                            <div class="card">
                                <figure
                                    class="card-img-top overlay overlay-1 hover-scale"
                                >
                                    <a href="#">
                                        <img
                                            src="./assets/img/photos/b7.jpg"
                                            alt=""
                                    /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Selengkapnya</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a
                                                class="link-dark"
                                                href="./blog-post.html"
                                                >Morbi leo risus porta eget</a
                                            >
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>
                                            Mauris convallis non ligula non
                                            interdum. Gravida vulputate
                                            convallis tempus vestibulum cras
                                            imperdiet nun eu dolor. Aenean
                                            lacinia bibendum nulla sed.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date">
                                            <i class="uil uil-calendar-alt"></i
                                            ><span>7 Jan 2021</span>
                                        </li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <div class="container pt-3 pt-md-5 pb-15 pb-md-18">
        <div class="row mb-7">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                <h2 class="fs-15 text-uppercase text-muted mb-3">Kontak Kami</h2>
                <h3 class="mb-10">
                    Jika anda punya pertanyaan ataupun saran yang membangun, jangan ragu untuk menghubungi kami.
                </h3>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="row gx-0">
                        <div class="col-lg-6 align-self-stretch">
                            <div
                                class="map map-full rounded-top rounded-lg-start"
                            >
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31554.927921782735!2d120.19511432801728!3d-8.656698725049925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db37c29dcbbbdcd%3A0xb51b596c072959bf!2sGalang%2C%20Welak%2C%20West%20Manggarai%20Regency%2C%20East%20Nusa%20Tenggara!5e0!3m2!1sen!2sid!4v1655863631667!5m2!1sen!2sid"
                                    style="width: 100%; height: 100%; border: 0"
                                    allowfullscreen=""
                                ></iframe>
                            </div>
                            <!-- /.map -->
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="p-10 p-md-11 p-lg-14">
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-green fs-28 me-6 mt-n1">
                                            <i class="uil uil-location-pin-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Alamat</h5>
                                        <address>
                                            Desa Galang, Kecamatan Welak, 
                                            <br class="d-none d-md-block" /> Manggarai Barat - NTT
                                        </address>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-green fs-28 me-6 mt-n1">
                                            <i class="uil uil-phone-volume"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">Telepon</h5>
                                        <p>+62 813 3752 2673</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div>
                                        <div class="icon text-green fs-28 me-6 mt-n1">
                                            <i class="uil uil-envelope"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">E-mail</h5>
                                        <p class="mb-0">
                                            sandbox@email.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--/div -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- /.content-wrapper -->

@endsection
