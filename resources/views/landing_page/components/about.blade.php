<main id="main">
    <div class="banner">
        <img src="{{ asset('assets/img/banner/banner1.jpg') }}" alt="banner">
    </div>
    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h2>About Us</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ Storage::url($about->photo) }}" class="img-fluid" alt="">
                </div>
                <div class=" col-lg-6 pt-lg-0">
                    <small>
                        <p>{!! $about->description !!}</p>
                    </small>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <section class=" skills" data-aos="fade-up">
        <div class="container">
            <div class="section-title">
                <h2>Vision & Mission</h2>
            </div>
            <div class="row">
                <div class="order-2 col-lg-6 order-lg-1">
                    <div class="pb-0 section-title">
                        <h4>Vision</h4>
                    </div>
                    <p>{!! $visiMission->vision !!}</p>

                    <div class="pb-0 section-title">
                        <h4>Mission</h4>
                    </div>
                    <p>{!! $visiMission->mission !!}</p>
                </div>
                <div class="order-1 pb-4 col-lg-6 order-lg-2">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End visi misi Section -->

    <section class="skills" data-aos="fade-up">
        <div class="service">
            <div class="container">
                <div class="section-title">
                    <h2>Advantages</h2>
                </div>
                <div class="row">
                    <div class="accordion" id="accordionExample">

                        @foreach ($advantages as $item => $key)
                            <div class="card text">
                                <div class="card-header" id="headingOne{{ $item }}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOne{{ $item }}" aria-expanded="false"
                                            aria-controls="collapseOne{{ $item }}">
                                            {{ $key->title }}
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne{{ $item }}" class="collapse"
                                    aria-labelledby="headingOne{{ $item }}" data-parent="#accordionExample">
                                    <div class="card-body" style="text-align: left;">
                                        {!! $key->description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    @foreach ($client as $item)
                        <div class="swiper-slide"><img src="{{ Storage::url($item->logo) }}" class="img-fluid"
                                alt="{{ $item->name }}"></div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Clients Section -->



    <!-- ======= Tetstimonials Section ======= -->
    {{-- <section class="testimonials" data-aos="fade-up">
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
    </section> --}}
    <!-- End Ttstimonials Section -->

</main><!-- End #main -->
