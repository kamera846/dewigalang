@extends('layouts.main')

@section('page-content')

<section class="wrapper bg-soft-green">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                <h1 class="mb-3">Lebih Dekat</h1>
                <nav class="d-inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Kontak
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
        <div class="row mb-15">
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
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                <h2 class="mb-3 text-center">Hubungi Kami</h2>
                <p class="lead text-center mb-10">
                    Isi formulir dibawah untuk menghubungi kami melalui whatsapp.
                </p>
                <form
                    class="contact-form needs-validation"
                    method="post"
                    action="./assets/php/contact.php"
                    novalidate
                >
                    <div class="messages"></div>
                    <div class="row gx-4">
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input
                                    id="form_name"
                                    type="text"
                                    name="nama"
                                    class="form-control"
                                    placeholder="Rizki Putra"
                                    required
                                />
                                <label for="form_name">Nama Lengkap *</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter your fullname.
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="form-floating mb-4">
                                <input
                                    id="form_email"
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="Putra@contoh.com"
                                    required
                                />
                                <label for="form_email">Alamat E-mail *</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please provide a valid email address.
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12">
                            <div class="form-floating mb-4">
                                <textarea
                                    id="form_message"
                                    name="pesan"
                                    class="form-control"
                                    placeholder="Apa yang ingin anda sampaikan.."
                                    style="height: 150px"
                                    required
                                ></textarea>
                                <label for="form_message">Isi Pesan *</label>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please enter your messsage.
                                </div>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12 text-center">
                            <input
                                type="submit"
                                class="btn btn-green rounded-pill btn-send mb-3"
                                value="Kirim Pesan"
                            />
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </form>
                <!-- /form -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

@endsection
