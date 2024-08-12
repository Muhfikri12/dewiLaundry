<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dewi Laundry</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: May 7 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('landing_page.components.header')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Dewi Laundry</span></h2>
                    <p class="animate__animated animate__fadeInUp">Layanan Laundry Hotel Pertama dan Satu-satunya di
                        Karawang. Kami Menetapkan Standar Keunggulan, Memastikan Tamu Anda Merasakan Kemewahan Linen
                        yang Selalu Bersih Sempurna, Setiap Saat.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                        Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                        Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut.
                        Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">
        <section class="section-bg">
            <div class="container mb-3 section-title">
                <h2 class="text-center text-white">Services</h2>
            </div>
            <div class="container">
                <div class="justify-content-center row">

                    <div class="text-center card-features col-lg-2 col-md-12">
                        <img src="{{ asset('assets/img/example1.jpg') }}" alt="">
                        <div class="desc-card">
                            <a href="">Guest Laundry</a>
                        </div>
                    </div>
                    <div class="text-center card-features col-lg-2 ">
                        <img src="{{ asset('assets/img/example2.jpg') }}" alt="">
                        <div class="desc-card">
                            <a href="">Linen Room</a>
                        </div>
                    </div>
                    <div class="text-center card-features col-lg-2 ">
                        <img src="{{ asset('assets/img/example3.jpg') }}" alt="">
                        <div class="desc-card">
                            <a href="">Rent Linen Room</a>
                        </div>
                    </div>
                    <div class="text-center card-features col-lg-2 ">
                        <img src="{{ asset('assets/img/example4.jpg') }}" alt="">
                        <div class="desc-card">
                            <a href="">Carpet, Bedcover & Etc</a>
                        </div>
                    </div>
                    <div class="text-center card-features col-lg-2 ">
                        <img src="{{ asset('assets/img/example5.jpg') }}" alt="">
                        <div class="desc-card">
                            <a href="">Employee Uniform</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Why Us Section ======= -->
        <section class="bg-white section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                        <a href="https://youtu.be/SDROba_M42g?si=bguzuhObDMOEJRcY" class="mb-4 venobox play-btn"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <div class="pb-0 mt-3 section-title">
                            <h2 class="mb-0">About Us</h2>
                        </div>
                        <div class="mt-3 icon-box">
                            <p><span style="font-weight: 600">PT. KIMOZA PRIMA JAYA ( Dewi Laundry )</span> didirikan
                                pada
                                tahun 2018 dengan semangat
                                untuk memberikan layanan laundry terbaik bagi masyarakat Karawang. Berawal
                                dari usaha laundry rumahan, kami terus berkembang dan berinovasi hingga
                                menjadi laundry profesional terdepan di Karawang.
                            </p>
                            <p>
                                Komitmen kami tidak hanya pada kebersihan dan ketepatan waktu, tetapi juga
                                membangun kepercayaan dan menjalin hubungan jangka panjang dengan
                                para pelanggan. Kami memahami kebutuhan hotel dan perusahaan di
                                Karawang, dan kami dedikasikan layanan kami untuk memenuhi kebutuhan
                                mereka dengan sepenuh hati.
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('about') }}">Selengkapnya</a>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5 justify-content-center">
                    <div class="member col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Yusuf Agung Nugroho</h4>
                            <span>Owner</span>
                            <p>Owner</p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Ilham Bahtiar</h4>
                            <span>Grand Manager</span>
                            <p>Grand Manager</p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Yubi Abdillah</h4>
                            <span>Manager Operational</span>
                            <p>Manager Operational</p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Team Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">
            <div class="container">
                <div class="mb-3 section-title">
                    <h2 class="text-center">Our Clients</h2>
                </div>
                <div class="swiper init-swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- /Clients Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">

                <div class="mb-3 section-title">
                    <h2 class="text-center">Galeries</h2>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                    data-aos-duration="500">

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-app">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>App 1</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-web">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Kunjungan Batiqa Hotel</p>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Lihat Detail"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-app">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>App 2</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-card">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>Card 2</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-web">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>Web 2</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-app">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>App 3</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-card">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>Card 1</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-card">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>Card 3</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-web">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>Web 1</h3>
                                <div>
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    @include('landing_page.components.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // Initialize Swiper
        const swiper = new Swiper('.init-swiper', {
            loop: true,
            speed: 600,
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 80,
                },
                992: {
                    slidesPerView: 6,
                    spaceBetween: 120,
                },
            },
        });
    </script>

    <script>
        if (window.innerWidth <= 425) {
            const swiper = new Swiper('.swiper-container', {
                slidesPerView: 2,
                spaceBetween: 10,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
    </script>



</body>

</html>
