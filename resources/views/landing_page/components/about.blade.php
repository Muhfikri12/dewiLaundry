@extends('layouts.index')

@section('title', 'About Dewi Laundry')

@section('main')
    <main id="main">
        <div class="banner">
            <img src="{{ Storage::url($banners->banner) }}" alt="banner">
        </div>
        <!-- ======= About Section ======= -->
        <section class="about" data-aos="fade-up">
            <div class="container">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>
                <div class="row">
                    <div class="mb-4 col-lg-6">
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

        <!-- ======= Facts Section ======= -->
        <section class="facts section-bg-about" data-aos="fade-up">
            <div class="container">

                <div class="text-white row counters">

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
    </main><!-- End #main -->
@endsection
