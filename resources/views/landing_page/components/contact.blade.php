<main id="main">

    <!-- ======= Contact Section ======= -->
    <div class="banner">
        <img src="{{ Storage::url($banners->banner) }}" alt="banner">
    </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>{{ $contact->address }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" style="width: 50%">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>{{ $contact->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" style="width: 50%">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>{{ $contact->phone }}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="{{ route('message') }}" method="post" class="php-email-form-a">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    value="{{ old('name') }}" placeholder="Your Name">
                                @error('name')
                                    <small><span class="text-danger">{{ $message }}</span></small>
                                @enderror
                            </div>
                            <div class="mt-3 col-md-6 form-group mt-md-0">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" value="{{ old('email') }}" placeholder="Your Email">
                                @error('email')
                                    <small><span class="text-danger">{{ $message }}</span></small>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-3 form-group">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}">

                            @error('subject')
                                <small><span class="text-danger">{{ $message }}</span></small>
                            @enderror
                        </div>
                        <div class="mt-3 form-group">
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5"
                                placeholder="Message">{{ old('message') }}</textarea>
                            @error('message')
                                <small><span class="text-danger">{{ $message }}</span></small>
                            @enderror
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <button class="mt-3 justify-content-center " type="submit" class="btn btn-primary">Send
                            Message</button>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="mt-2 map">
        <div class="p-0 container-fluid">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.613005781391!2d107.3388086!3d-6.314460399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977004b7065d7%3A0xf1e0e0977e1599d5!2sDewi%20Laundry!5e0!3m2!1sen!2sid!4v1724238990776!5m2!1sen!2sid"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section><!-- End Map Section -->

</main><!-- End #main -->
