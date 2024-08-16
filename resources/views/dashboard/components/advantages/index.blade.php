<div class="p-0 bg-white container-xxl position-relative d-flex">

    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        @include('dashboard.navbar')
        <!-- Navbar End -->


        <!-- Table Start -->
        <div class="px-4 pt-4 container-fluid">
            <div class="row g-4">
                <div class="col-12">
                    <div class="p-4 rounded bg-light h-100">
                        <h6 class="mb-4">Advantages Table</h6>
                        <div class="table-responsive">
                            <table id="data-table" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($advantages as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->title }}</td>
                                            <td>{!! $item->description !!}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="p-0 btn hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="p-1 fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href=""><i
                                                                class="bx bx-edit-alt me-1"></i> Ubah</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                                class="bx bx-trash me-1"></i>
                                                            Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
