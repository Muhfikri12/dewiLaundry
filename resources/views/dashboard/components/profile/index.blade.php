<div class="p-0 bg-white container-xxl position-relative d-flex">
    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        @include('dashboard.navbar')
        <!-- Navbar End -->

        <!-- Display section -->

        <!-- Table Start -->
        <div class="px-4 pt-4 container-fluid">
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
                            <div class="order-lg-2 col-lg-6 image col-md-12 order-md-1 col-sm-12 order-sm-1">
                                <label for="about" class=" form-label">Photo Preview</label>
                                <img src="{{ Storage::url($about->photo) }}" alt="">
                            </div>
                        </div>
                    </div>
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
