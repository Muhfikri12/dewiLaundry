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
                <h6 class="mb-4">Gallery Form</h6>
                <div class="row gallery-form">
                    <div class="col-lg-9 col-md-9">
                        <form action="{{ route('client.update', $client->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('Put')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" value="{{ $client->name }}"
                                    aria-describedby="name">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                    id="logo" name="logo" aria-describedby="logo">

                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>

                    <div class="col-lg-3 col-md-3 gallery-preview">
                        <label for="logo" class="form-label">logo Preview</label>
                        <img class="rounded w-100" src="{{ Storage::url($client->logo) }}" alt="{{ $client->name }}">
                    </div>
                </div>
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
