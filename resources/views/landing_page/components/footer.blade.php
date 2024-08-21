    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('service') }}">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            @foreach ($service as $item)
                                <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $item->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            {{ $contact->address }}<br><br>
                            <strong>Phone:</strong> {{ $contact->phone }}<br>
                            <strong>Email:</strong> {{ $contact->email }}<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About Dewi Laundry</h3>
                        <p>{{ \Illuminate\Support\Str::limit($about->description, 175, '...') }}</p>
                        <div class="mt-3 social-links">
                            <a href="{{ $contact->x_link }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="{{ $contact->fb_link }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{ $contact->ig_link }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="{{ $contact->linkedIn_link }}" class="linkedin"><i
                                    class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>PT. Kimoza Prima Jaya</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
