<main id="main">


    <section class="section-bg">
        <div class="container mb-3 section-title">
            <h2 class="text-center text-white">Our Services</h2>
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
    <section class="why-us " data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="{{ Storage::url($whyUs->photo) }}" class="img-fluid" alt="">
                </div>

                <div class=" col-lg-6 d-flex flex-column justify-content-center">

                    <div class="icon-box">
                        <h4 class="title"><a href="">Why Us</a></h4>
                        <p class="description">{!! $whyUs->description !!}</p>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Why Us Section -->

    <section class="service-detail" data-aos="fade-up" date-aos-delay="200">
        <div class="container px-4">
            <div class="row">
                @foreach ($service as $item)
                    <div class="p-3 mb-2 border border-purple-600 rounded-4 col-12 detail-service-section">
                        <h5 class="text-center">{{ $item->title }}</h5>
                        <p>{{ $item->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Service Section -->

    <!-- ======= Machine Section ======= -->
    <section class="service-details">
        <div class="container">
            <div class="section-title">
                <h2>Our Machines</h2>
            </div>
            <div class="row">
                @foreach ($machine as $item)
                    <div class="machine col-lg-4 col-md-6 col-sm-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ Storage::url($item->photo) }}" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">{{ $item->name }}</a></h5>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center" data-aos="fade-up">
                {{ $machine->links('components.pagination') }}
            </div>

        </div>
    </section><!-- End Machine Section -->

</main><!-- End #main -->
