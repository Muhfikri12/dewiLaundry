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
                    <h2 class="animate__animated animate__fadeInDown">First in Karawang</h2>
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
        <section class="bg-opacity-25 section-bg">
            <div class="container mb-3 section-title">
                <h2 class="text-center text-white">Services</h2>
            </div>
            <div class="container">
                <div class="justify-content-center row">
                    @foreach ($service as $item)
                        <div class="text-center card-features col-lg-2 col-md-12">
                            <img src="{{ Storage::url($item->image) }}" alt="">
                            <div class="desc-card">
                                <h6>{{ $item->title }}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======= Why Us Section ======= -->
        <section class=" why-us" data-aos="fade-up" date-aos-delay="200">
            <div class="container pt-4">
                <div class="section-title ">
                    <h2 class="mb-0">About Us</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="{{ Storage::url($about->photo) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <div class="icon-box">
                            <small>
                                <p>{!! $about->description !!}
                                </p>
                            </small>
                        </div>
                        <div>
                            <div class="read-more"><a href="{{ route('about') }}"><i class="bi bi-arrow-right"></i> Read
                                    More</a>
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
                    @foreach ($teams as $item)
                        <div class="member col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="{{ Storage::url($item->photo) }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->name }}</h4>
                                <span>{{ $item->position }}</span>
                                <p>{{ $item->position }}</p>
                                <div class="social">
                                    @if ($item->x_link)
                                        <a href="{{ $item->x_link }}"><i class="bi bi-twitter-x"></i></a>
                                    @endif

                                    @if ($item->fb_link)
                                        <a href="{{ $item->fb_link }}"><i class="bi bi-facebook"></i></a>
                                    @endif

                                    @if ($item->ig_link)
                                        <a href="{{ $item->ig_link }}"><i class="bi bi-instagram"></i></a>
                                    @endif

                                    @if ($item->linkedIn_link)
                                        <a href="{{ $item->linkedIn_link }}"><i class="bi bi-linkedin"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    @endforeach

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
                        @foreach ($client as $item)
                            <div class="swiper-slide"><img src="{{ Storage::url($item->logo) }}" class="img-fluid"
                                    alt="{{ $item->name }}">
                            </div>
                        @endforeach
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

                    @foreach ($gallery as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-wrap filter-app">
                            <div class="portfolio-item">
                                <img src="{{ Storage::url($item->photo) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <p>{{ $item->name }}</p>
                                    <div>
                                        <a href="{{ Storage::url($item->photo) }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center" data-aos="fade-up">
                    {{ $gallery->links('components.pagination') }}
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
