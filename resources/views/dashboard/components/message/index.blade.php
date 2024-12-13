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
                    <div class="px-4 py-2 rounded bg-light h-100">
                        <div class="m-2 header-table d-flex justify-content-between align-items-center">
                            <h5 class="">Message Table</h5>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table" class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messageDetail as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{!! $item->message !!}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="p-0 btn hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="p-1 fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('message.show', $item->id) }}"><i
                                                                class="fa fa-eye me-1"></i>Lihat</a>
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
