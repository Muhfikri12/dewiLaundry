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
                            <h5 class="">Tagline Table</h5>
                            <a class="m-2 btn btn-sm btn-primary" type="button" href="{{ route('tagline.create') }}"><i
                                    class="fa fa-plus me-2"></i>Add
                                Tagline</a>
                        </div>
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
                                    @foreach ($tagline as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{!! $item->title !!}</td>
                                            <td>{!! $item->description !!}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="p-0 btn hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="p-1 fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('tagline.edit', $item->id) }}"><i
                                                                class="fa fa-edit me-1"></i>Ubah</a>
                                                        <form action="{{ route('tagline.destroy', $item->id) }}"
                                                            method="POST" id="delete-form-{{ $item->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a class="dropdown-item" href="javascript:void(0);"
                                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
                                                                <i class="fa fa-trash me-1"></i> Hapus
                                                            </a>
                                                        </form>
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
