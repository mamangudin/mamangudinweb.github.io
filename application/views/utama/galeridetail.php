<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="<?= base_url('') ?>" class="logo"><img src="<?= base_url('thema/') ?>assets/img/logo.png" alt="" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="<?= base_url('') ?>">Home</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('') ?>">Profil</a></li>
                <li><a class="nav-link  scrollto" href="<?= base_url('') ?>">Galeri</a></li>
                <!-- <li><a class="nav-link  scrollto" href="#journal">Blog</a></li> -->
                <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                <li><a class="nav-link scrollto" href="<?= base_url('') ?>">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Galari Detail</h2>
                <ol>
                    <li><a href="<?= base_url('') ?>">Home</a></li>
                    <li><a href="<?= base_url('') ?>">Galeri</a></li>
                    <li>Galeri Details</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-details-1.jpg" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="portfolio-info">
                        <h3>Contoh Halaman detail Galeri</h3>
                        <p>
                            isi Keterangan
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main>