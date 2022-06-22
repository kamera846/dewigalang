@extends('layouts.main')

@section('page-content')

<section class="wrapper bg-soft-green">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                <h1 class="mb-3">Artikel</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Artikel
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
<section class="wrapper bg-light angled upper-end lower-end">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8">
                <div class="blog classic-view">
                    <article class="post">
                        <div class="card">
                            <figure
                                class="card-img-top overlay overlay-1 hover-scale"
                            >
                                <a href="/blog-detail"
                                    ><img
                                        src="./assets/img/photos/b1.jpg"
                                        alt=""
                                /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Selengkapnya</h5>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <div class="post-header">
                                    <h2 class="post-title mt-1 mb-0">
                                        <a class="link-dark" href="/blog-detail"
                                            >Amet Dolor Bibendum Parturient
                                            Cursus</a
                                        >
                                    </h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>
                                        Duis mollis, est non commodo luctus,
                                        nisi erat porttitor ligula, eget lacinia
                                        odio sem nec elit. Nullam quis risus
                                        eget urna mollis ornare vel. Nulla vitae
                                        elit libero, a pharetra augue. Praesent
                                        commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Sed posuere
                                        consectetur est at lobortis. Cras mattis
                                        consectetur purus sit amet fermentum.
                                        Fusce dapibus, tellus ac cursus commodo,
                                        tortor mauris condimentum nibh. Cras
                                        mattis consectetur purus.
                                    </p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                            <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i>
                                        <span>5 Jul 2021</span>
                                    </li>
                                    <li class="post-author">
                                        <i class="uil uil-user"></i>
                                        <span>Oleh Sandbox</span>
                                    </li>
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
                <!-- /.blog -->
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                        </a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                        </a>
                      </li>
                    </ul>
                    <!-- /.pagination -->
                </nav>
            </div>
            <!-- /column -->
            <aside class="col-lg-4 sidebar">
                <div class="widget">
                    <h4 class="widget-title mb-3">Cari Artikel</h4>
                    <form class="search-form">
                        <div class="form-floating mb-0">
                            <input
                                id="search-form"
                                type="text"
                                class="form-control"
                                placeholder="cari"
                            />
                            <label for="search-form">Kata kunci</label>
                        </div>
                    </form>
                    <!-- /.search-form -->
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Artikel Terbaru</h4>
                    <ul class="image-list">
                        <li>
                            <figure class="rounded">
                                <a href="/blog-detail"
                                    ><img
                                        src="./assets/img/photos/a1.jpg"
                                        alt=""
                                /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2">
                                    <a class="link-dark" href="/blog-detail"
                                        >Magna Mollis Ultricies Lorem ipsum dolor</a
                                    >
                                </h6>
                                <ul class="post-meta">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i
                                        ><span>26 Mar 2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                        <li>
                            <figure class="rounded">
                                <a href="/blog-detail"
                                    ><img
                                        src="./assets/img/photos/a2.jpg"
                                        alt=""
                                /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2">
                                    <a class="link-dark" href="/blog-detail"
                                        >Ornare Nullam Risus</a
                                    >
                                </h6>
                                <ul class="post-meta">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i
                                        ><span>16 Feb 2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                        <li>
                            <figure class="rounded">
                                <a href="/blog-detail"
                                    ><img
                                        src="./assets/img/photos/a3.jpg"
                                        alt=""
                                /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2">
                                    <a class="link-dark" href="/blog-detail"
                                        >Euismod Nullam Fusce</a
                                    >
                                </h6>
                                <ul class="post-meta">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i
                                        ><span>8 Jan 2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                    </ul>
                    <!-- /.image-list -->
                </div>
                <!-- /.widget -->
            </aside>
            <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

@endsection
