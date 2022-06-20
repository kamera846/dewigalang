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
                            Galery
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
        <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
                <h2 class="fs-15 text-uppercase text-muted text-center mb-3">
                    Our Galleries
                </h2>
                <h3 class="text-center">
                    Check out some of our awesome Galleries with creative ideas
                    and great design.
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
                        <a href="../../single-project.html">
                            <img src="../../assets/img/photos/cs16.jpg" alt=""
                        /></a>
                    </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h2 class="post-title h3">Cras Fermentum Sem</h2>
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
                        <a href="../../single-project2.html">
                            <img src="../../assets/img/photos/cs17.jpg" alt=""
                        /></a>
                    </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h2 class="post-title h3">Mollis Ipsum Mattis</h2>
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
                        <a href="../../single-project3.html">
                            <img src="../../assets/img/photos/cs18.jpg" alt=""
                        /></a>
                    </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h2 class="post-title h3">
                                Ipsum Ultricies Cursus
                            </h2>
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
                        <a href="../../single-project2.html">
                            <img src="../../assets/img/photos/cs20.jpg" alt=""
                        /></a>
                    </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h2 class="post-title h3">
                                Inceptos Euismod Egestas
                            </h2>
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
                        <a href="../../single-project.html">
                            <img src="../../assets/img/photos/cs19.jpg" alt=""
                        /></a>
                    </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h2 class="post-title h3">
                                Sollicitudin Ornare Porta
                            </h2>
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
                        <a href="../../single-project3.html">
                            <img src="../../assets/img/photos/cs21.jpg" alt=""
                        /></a>
                    </figure>
                    <div
                        class="project-details d-flex justify-content-center flex-column"
                    >
                        <div class="post-header">
                            <h2 class="post-title h3">
                                Ipsum Mollis Vulputate
                            </h2>
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
</section>

@endsection
