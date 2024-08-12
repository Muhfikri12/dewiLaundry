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


    <main id="main">
        <div class="container banner">
            <img src="{{ asset('assets/img/banner/banner1.jpg') }}" alt="banner">
        </div>
        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ol>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= About Section ======= -->
        <section class="about" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="pt-4 col-lg-6 pt-lg-0">
                        <p><span style="font-weight: 600">PT. KIMOZA PRIMA JAYA ( Dewi Laundry )</span> didirikan pada
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
                        <p>
                            Dengan pengalaman dan dedikasi <span style="font-weight: 600">PT. KIMOZA PRIMA JAYA</span>
                            telah menjadi
                            mitra terpercaya bagi banyak hotel dan perusahaan di Karawang. Kami bangga
                            atas kepercayaan yang diberikan kepada <span style="font-weight: 600">PT. KIMOZA PRIMA
                                JAYA</span>, dan kami
                            terus berusaha untuk memberikan layanan terbaik bagi para pelanggan
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= visi misi Section ======= -->
        <section class="skills" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Visi</h2>
                    <p>Menjadi perusahaan jasa laundry profesional dengan mengedapankan
                        hasil dan kualitas terbaik.</p>
                </div>

                <div class="section-title">
                    <h2>Misi</h2>
                    <p>Memberikan kualitas pencucian yang suci, bersih dan rapi.</p>
                    <p>Memberikan pelayanan profesional dengan berbasis pada ketepatan
                        waktu dalam pengantaran laundry.</p>
                    <p>Memiliki komitment terhadap kesepakatan kerjasama.</p>
                    <p>Menjadi penyedia jasa yang memiliki kemampuan pengelolaan emosi
                        dalam memberikan solusi jika terjadi masalah.</p>
                </div>

            </div>
        </section><!-- End visi misi Section -->

        <!-- ======= Facts Section ======= -->
        <section class="facts section-bg" data-aos="fade-up">
            <div class="container">

                <div class="row counters">

                    <div class="text-center col-lg-3 col-6">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="text-center col-lg-3 col-6">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="text-center col-lg-3 col-6">
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="text-center col-lg-3 col-6">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Clients Section ======= -->
        <section class="clients" data-aos="fade-up">
            <div class="container" data-aos="fade-up" data-aos-delay="100" data-no-editable="true">

                <div class="swiper clients-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
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
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->



        <!-- ======= Tetstimonials Section ======= -->
        <section class="testimonials" data-aos="fade-up">
            <div class="container">

                <div class="section-title">
                    <h2>Tetstimonials</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-carousel swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial-item swiper-slide">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>

                        <div class="testimonial-item swiper-slide">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>

                        <div class="testimonial-item swiper-slide">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>

                        <div class="testimonial-item swiper-slide">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>

                        <div class="testimonial-item swiper-slide">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Ttstimonials Section -->

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
</body>

</html>
