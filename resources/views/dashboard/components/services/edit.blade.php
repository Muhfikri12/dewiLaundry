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
                <h6 class="mb-4">Service Form</h6>
                <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror" value="{{ $service->title }}"
                            aria-describedby="title">

                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Photo</label>
                        <input class="form-control @error('photo') is-invalid @enderror" type="file" id="image"
                            name="image" aria-describedby="image">

                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            cols="30" rows="10">{{ $service->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
