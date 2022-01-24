<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="<?= base_url('') ?>" class="logo"><img src="<?= base_url('thema/') ?>assets/img/logo.png" alt="" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                <li><a class="nav-link  scrollto" href="#portfolio">Galeri</a></li>
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
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<div id="hero" class="home">

    <div class="container">
        <div class="hero-content">
            <h1>DIF <span class="typed" data-typed-items="DIHARJO INTEGRATED FARMING"></span></h1>
            <p>(DIHARJO INTEGRATED FARMING) <br>
                085368672403
            </p>


            <!-- <ul class="list-unstyled list-social">
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
        </ul> -->
        </div>
    </div>
</div>


<main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-4 ">
                    <div class="div-img-bg">
                        <div class="about-img">
                            <img src="<?= base_url('thema/') ?>assets/img/me.jpg" class="img-responsive" alt="me">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-descr">

                        <p class="p-heading"> DIHARJO INTEGRATED FARMING</p>
                        <p class="separator">isi Keterangan</p>

                    </div>

                </div>
            </div>
        </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <!-- <div id="services">
    <div class="container">

        <div class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="services-block">
                        <i class="bi bi-briefcase"></i>
                        <span>UI/UX DESIGN</span>
                        <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="services-block">
                        <i class="bi bi-card-checklist"></i>
                        <span>BRAND IDENTITY</span>
                        <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="services-block">
                        <i class="bi bi-bar-chart"></i>
                        <span>WEB DESIGN</span>
                        <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="services-block">
                        <i class="bi bi-binoculars"></i>
                        <span>MOBILE APPS</span>
                        <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="services-block">
                        <i class="bi bi-brightness-high"></i>
                        <span>Analytics</span>
                        <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="services-block">
                        <i class="bi bi-calendar4-week"></i>
                        <span>PHOTOGRAPHY</span>
                        <p class="separator">To an English person, it will seem like simplified English,told me what </p>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</div> -->
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

        <div class="container">
            <div class="section-title text-center">
                <h2>GALERI DIF</h2>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">Peternakan</li>
                        <li data-filter=".filter-2">Perkebunan</li>
                        <li data-filter=".filter-3">Perikanan</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-1">
                    <img src="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Peternakan</h4>
                        <p>Peternakan</p>
                        <a href="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Peternakan"><i class="bx bx-plus"></i></a>
                        <a href="<?= base_url('galeri/galeridetail') ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-3">
                    <img src="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Perikanan</h4>
                        <p>Perikanan</p>
                        <a href="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perikanan"><i class="bx bx-plus"></i></a>
                        <a href="<?= base_url('galeri/galeridetail') ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-1">
                    <img src="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Peternakan</h4>
                        <p>Peternakan</p>
                        <a href="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Peternakan"><i class="bx bx-plus"></i></a>
                        <a href="<?= base_url('galeri/galeridetail') ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-3">
                    <img src="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Perikanan</h4>
                        <p>Perikanan</p>
                        <a href="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perikanan"><i class="bx bx-plus"></i></a>
                        <a href="<?= base_url('galeri/galeridetail') ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-2">
                    <img src="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Perkebunan</h4>
                        <p>Perkebunan</p>
                        <a href="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perkebunan"><i class="bx bx-plus"></i></a>
                        <a href="<?= base_url('galeri/galeridetail') ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-2">
                    <img src="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Perkebunan</h4>
                        <p>Perkebunan</p>
                        <a href="<?= base_url('thema/') ?>assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Perkebunan"><i class="bx bx-plus"></i></a>
                        <a href="<?= base_url('galeri/galeridetail') ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </div><!-- End Portfolio Section -->

    <!-- ======= Journal Section ======= -->
    <!-- <div id="journal" class="text-left paddsection">

    <div class="container">
        <div class="section-title text-center">
            <h2>journal</h2>
        </div>
    </div>

    <div class="container">
        <div class="journal-block">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="journal-info">

                        <a href="blog-single.html"><img src="assets/img/blog-post-1.jpg" class="img-responsive" alt="img"></a>

                        <div class="journal-txt">

                            <h4><a href="blog-single.html">SO LETS MAKE THE MOST IS BEAUTIFUL</a></h4>
                            <p class="separator">To an English person, it will seem like simplified English
                            </p>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="journal-info">

                        <a href="blog-single.html"><img src="assets/img/blog-post-2.jpg" class="img-responsive" alt="img"></a>

                        <div class="journal-txt">

                            <h4><a href="blog-single.html">WE'RE GONA MAKE DREAMS COMES</a></h4>
                            <p class="separator">To an English person, it will seem like simplified English
                            </p>

                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="journal-info">

                        <a href="blog-single.html"><img src="assets/img/blog-post-3.jpg" class="img-responsive" alt="img"></a>

                        <div class="journal-txt">

                            <h4><a href="blog-single.html">NEW LIFE CIVILIZATIONS TO BOLDLY</a></h4>
                            <p class="separator">To an English person, it will seem like simplified English
                            </p>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div> -->
    <!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="paddsection">
        <div class="container">
            <div class="contact-block1">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact-contact">

                            <h2 class="mb-30">Kontak</h2>

                            <ul class="contact-details">

                                <li><span> 085368672403</span></li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row gy-3">

                            <div class="col-lg-6">
                                <div class="form-group contact-block1">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>

                            <div class="mt-0">
                                <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                            </div>

                        </div>
                    </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Contact Section -->

</main>