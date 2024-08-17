<main id="main">


    <section class="section-bg">
        <div class="container mb-3 section-title">
            <h2 class="text-center text-white">Our Services</h2>
        </div>
        <div class="container">
            <div class="justify-content-center row">

                <div class="text-center card-features col-lg-2 col-md-12">
                    <img src="{{ asset('assets/img/example1.jpg') }}" alt="">
                    <div class="desc-card">
                        <h6>Guest Laundry</h6>
                    </div>
                </div>
                <div class="text-center card-features col-lg-2 ">
                    <img src="{{ asset('assets/img/example2.jpg') }}" alt="">
                    <div class="desc-card">
                        <h6>Linen Laundry</h6>
                    </div>
                </div>
                <div class="text-center card-features col-lg-2 ">
                    <img src="{{ asset('assets/img/example3.jpg') }}" alt="">
                    <div class="desc-card">
                        <h6>Rent Linen Room</h6>
                    </div>
                </div>
                <div class="text-center card-features col-lg-2 ">
                    <img src="{{ asset('assets/img/example4.jpg') }}" alt="">
                    <div class="desc-card">
                        <h6>Carpet, Bedcover & Etc</h6>
                    </div>
                </div>
                <div class="text-center card-features col-lg-2 ">
                    <img src="{{ asset('assets/img/example5.jpg') }}" alt="">
                    <div class="desc-card">
                        <h6>Uniform Laundry</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why-us section-bg-service" data-aos="fade-up" date-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                </div>

                <div class=" col-lg-6 d-flex flex-column justify-content-center">

                    <div class="icon-box">
                        <h4 class="title"><a href="">Why Us</a></h4>
                        <p class="description">Dewi Laundry menawarkan lebih dari sekadar jasa mencuci dan
                            menyetrika. Kami menyediakan solusi laundry yang komprehensif, dirancang untuk memenuhi
                            kebutuhan unik setiap pelanggan.</p>
                        <p class="description">Dengan layanan yang profesional dan didukung oleh peralatan modern, kami
                            menjamin kualitas hasil laundry yang optimal.</p>
                        <p class="description">Kami juga menawarkan fleksibilitas dalam pelayanan, mulai dari pilihan
                            paket yang sesuai dengan kebutuhan Anda hingga layanan antar-jemput yang memudahkan. Pilih
                            Dewi Laundry untuk kenyamanan, kepercayaan, dan hasil yang terbaik setiap kali
                            Anda membutuhkan solusi laundry.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

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
                                <img src="{{ asset($item->photo) }}" alt="...">
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
