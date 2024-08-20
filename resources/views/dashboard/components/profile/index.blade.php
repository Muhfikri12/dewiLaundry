<div class="p-0 bg-white container-xxl position-relative d-flex">
    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        @include('dashboard.navbar')
        <!-- Navbar End -->

        <!-- Display section -->

        <!-- Table Start -->
        <div class="px-4 pt-4 container-fluid">

            {{-- About Us Start --}}
            <div class="row g-4">
                <div class="col-12">
                    <div class="px-4 py-2 rounded bg-light h-100">
                        <div class="m-2 header-table d-flex justify-content-center align-items-center">
                            <div class="section-title-dashboard">
                                <h5>About Us</h5>
                            </div>
                        </div>
                        <div class="row about">
                            <div class="order-lg-1 col-lg-6 col-md-12 order-md-2 col-sm-12 order-sm-2">
                                <form action="{{ route('about.update', 1) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Photo</label>
                                        <input class="form-control @error('photo') is-invalid @enderror" type="file"
                                            id="photo" name="photo" aria-describedby="photo">

                                        @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" id="about" cols="" rows="" class="py-2"> {{ $about->description }}</textarea>

                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="order-lg-2 col-lg-6 image-about col-md-12 order-md-1 col-sm-12 order-sm-1">
                                <label for="about" class=" form-label">Photo Preview</label>
                                <img src="{{ Storage::url($about->photo) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- About Us End --}}
            <div class="pt-4">
                <div class="row">
                    {{-- Contact Start --}}
                    <div class="col-lg-6 col-sm-12">
                        <div class="px-4 py-2 rounded bg-light h-100">
                            <div class="m-2 header-table d-flex justify-content-center align-items-center">
                                <div class="section-title-dashboard">
                                    <h5>Contact</h5>
                                </div>
                            </div>
                            <form action="{{ route('update.contact', 1) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Company Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ $contact->name }}" aria-describedby="name">

                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-lg-8 col-md-8">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                            id="logo" name="logo" aria-describedby="logo">

                                        @error('logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4 company-logo">
                                        <img class="rounded" src="{{ Storage::url($contact->logo) }}" alt="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ $contact->email }}" aria-describedby="email">

                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" name="phone" id="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ $contact->phone }}" aria-describedby="phone">

                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="instagram" class="form-label">Instagram</label>
                                        <input type="text" name="instagram" id="instagram"
                                            class="form-control @error('instagram') is-invalid @enderror"
                                            value="{{ $contact->ig_link }}" aria-describedby="instagram">

                                        @error('instagram')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input type="text" name="facebook" id="facebook"
                                            class="form-control @error('facebook') is-invalid @enderror"
                                            value="{{ $contact->fb_link }}" aria-describedby="facebook">

                                        @error('facebook')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="whatsapp" class="form-label">Whatsapp</label>
                                        <input type="text" name="whatsapp" id="whatsapp"
                                            class="form-control @error('whatsapp') is-invalid @enderror"
                                            value="{{ $contact->wa_link }}" aria-describedby="whatsapp">

                                        @error('whatsapp')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="linkedIn" class="form-label">LinkedIn</label>
                                        <input type="text" name="linkedIn" id="linkedIn"
                                            class="form-control @error('linkedIn') is-invalid @enderror"
                                            value="{{ $contact->linkedIn_link }}" aria-describedby="linkedIn">

                                        @error('linkedIn')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                    {{-- Contact end --}}
                    {{-- Contact Start --}}
                    <div class="col-lg-6 col-sm-12">
                        <div class="px-4 py-2 rounded bg-light h-100">
                            <div class="m-2 header-table d-flex justify-content-center align-items-center">
                                <div class="section-title-dashboard">
                                    <h5>Vision & Mission</h5>
                                </div>
                            </div>
                            <form action="{{ route('visiMission.update', 1) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="vision" class="form-label">Vision</label>
                                    <textarea name="vision" id="vision" cols="" rows="" class="py-2"> {{ $visiMission->vision }}</textarea>

                                    @error('vision')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="mission" class="form-label">Mission</label>
                                    <textarea name="mission" id="mission" class="py-2"> {{ $visiMission->mission }}</textarea>
                                    @error('mission')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                    {{-- Contact end --}}
                </div>
            </div>
        </div>
        <!-- Table End -->


        <!-- Footer Start -->
        @include('dashboard.footer')
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
