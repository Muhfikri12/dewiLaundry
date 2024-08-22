<div class="p-0 bg-white container-xxl position-relative d-flex">
    <!-- Sidebar Start -->
    @include('dashboard.sidebar')
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        @include('dashboard.navbar')
        <!-- Navbar End -->


        <!-- Form Start -->
        <div class="px-4 pt-4 container-fluid">
            <div class="p-4 rounded bg-light h-100">
                <h5 class="mb-4">Team Form</h5>
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                            aria-describedby="name">

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo"
                            name="photo" aria-describedby="photo">
                        <small>
                            <p class="12px text-danger"><sup>*</sup> The Photo should have ratio 1:1</p>
                        </small>

                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" name="position" id="position"
                            class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}"
                            aria-describedby="position">

                        @error('position')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="ig_link" class="form-label">Instagram Link</label>
                            <input type="text" name="ig_link" id="ig_link"
                                class="form-control @error('ig_link') is-invalid @enderror" value="{{ old('ig_link') }}"
                                aria-describedby="ig_link">

                            @error('ig_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="fb_link" class="form-label">Facebook Link</label>
                            <input type="text" name="fb_link" id="fb_link"
                                class="form-control @error('fb_link') is-invalid @enderror" value="{{ old('fb_link') }}"
                                aria-describedby="fb_link">

                            @error('fb_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="x_link" class="form-label">X Link</label>
                            <input type="text" name="x_link" id="x_link"
                                class="form-control @error('x_link') is-invalid @enderror" value="{{ old('x_link') }}"
                                aria-describedby="x_link">

                            @error('x_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="linkedIn_link" class="form-label">LinkedIn Link</label>
                            <input type="text" name="linkedIn_link" id="linkedIn_link"
                                class="form-control @error('linkedIn_link') is-invalid @enderror"
                                value="{{ old('linkedIn_link') }}" aria-describedby="linkedIn_link">

                            @error('linkedIn_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        <!-- Form End -->


        <!-- Footer Start -->
        @include('dashboard.footer')
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
