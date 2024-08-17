@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<div class="p-0 bg-white container-xxl position-relative d-flex">
    <style>
        .ck-content {
            height: 20rem;
        }

        .cke_chrome {
            margin-top: 1rem
        }
    </style>
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
                                <h5>Company Profile</h5>
                            </div>
                            {{-- <a class="m-2 btn btn-sm btn-primary" type="button" href="{{ route('about.create') }}"><i
                                    class="fa fa-plus me-2"></i>Company Profile</a> --}}
                        </div>
                        <div class="">
                            <form id="dzImageUploadForm" action="/upload" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class=" position-relative row">
                                    <div class="mb-3 form-group">
                                        <div class="p-0 main-drag-area form-control" id="dzDropzone">
                                            <div class="opacity-75 dz-message rounded-3 text-muted" id="dzPlaceholder">
                                                <svg class="mb-3 opacity-50" width="50px" height="50px"
                                                    viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                                    aria-hidden="true" focusable="false">
                                                    <path
                                                        d="M41.636 8.404l1.017 7.237 17.579 4.71a5 5 0 0 1 3.587 5.914l-.051.21-6.73 25.114A5.002 5.002 0 0 1 53 55.233V56a5 5 0 0 1-4.783 4.995L48 61H16a5 5 0 0 1-4.995-4.783L11 56V44.013l-1.69.239a5 5 0 0 1-5.612-4.042l-.034-.214L.045 14.25a5 5 0 0 1 4.041-5.612l.215-.035 31.688-4.454a5 5 0 0 1 5.647 4.256zm-20.49 39.373l-.14.131L13 55.914V56a3 3 0 0 0 2.824 2.995L16 59h21.42L25.149 47.812a3 3 0 0 0-4.004-.035zm16.501-9.903l-.139.136-9.417 9.778L40.387 59H48a3 3 0 0 0 2.995-2.824L51 56v-9.561l-9.3-8.556a3 3 0 0 0-4.053-.009zM53 34.614V53.19a3.003 3.003 0 0 0 2.054-1.944l.052-.174 2.475-9.235L53 34.614zM48 27H31.991c-.283.031-.571.032-.862 0H16a3 3 0 0 0-2.995 2.824L13 30v23.084l6.592-6.59a5 5 0 0 1 6.722-.318l.182.159.117.105 9.455-9.817a5 5 0 0 1 6.802-.374l.184.162L51 43.721V30a3 3 0 0 0-2.824-2.995L48 27zm-37 5.548l-5.363 7.118.007.052a3 3 0 0 0 3.388 2.553L11 41.994v-9.446zM25.18 15.954l-.05.169-2.38 8.876h5.336a4 4 0 1 1 6.955 0L48 25.001a5 5 0 0 1 4.995 4.783L53 30v.88l5.284 8.331 3.552-13.253a3 3 0 0 0-1.953-3.624l-.169-.05L28.804 14a3 3 0 0 0-3.623 1.953zM21 31a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM36.443 6.11l-.175.019-31.69 4.453a3 3 0 0 0-2.572 3.214l.02.175 3.217 22.894 5.833-7.74a5.002 5.002 0 0 1 4.707-4.12L16 25h4.68l2.519-9.395a5 5 0 0 1 5.913-3.587l.21.051 11.232 3.01-.898-6.397a3 3 0 0 0-3.213-2.573zm-6.811 16.395a2 2 0 0 0 1.64 2.496h.593a2 2 0 1 0-2.233-2.496zM10 13a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                                                    </path>
                                                </svg>
                                                {{-- <img src="{{ asset($about->photo) }}" alt=""> --}}
                                                <span>Drag your images here to upload</span>
                                            </div>
                                            <div class="dz-previews-container" id="dzPreviews"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 invalid-feedback fw-bold" id="dzErrorMessage"></div>
                                <textarea name="about" id="about" cols="30" rows="10" class="py-2"> {{ $about->description }}
                                </textarea>
                                <button class="px-4 py-3 mt-2 btn btn-lg btn-primary fs-6" id="dzSubmitButton">Upload
                                    Images</button>
                            </form>
                            <section class="py-5 bg-white display-none" id="uploadedImagesSection">
                                <div class="container py-5">
                                    <header class="mb-5">
                                        <h1 class="mb-4 display-5 fw-bold">Uploaded images in order</h1>
                                        <p class="mb-0 lead text-muted">Below you can see the previously uploaded
                                            images, in your manually
                                            sorted ascending display order.</p>
                                    </header>
                                    <div id="previewsContainer"></div>
                                </div>
                            </section>

                            <!-- Templates -->
                            <script id="dzImageTemplate" type="text/template">
                                <div class="dz-image-preview" data-id="">
                                    <div class="overflow-hidden dz-image position-relative rounded-3 h-100" >
                                        <img class="w-100 h-100 object-fit-cover" data-dz-thumbnail>
                                        <svg class="m-2 dz-remove-button" type="button" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" />
                                        </svg>
                                    </div>
                                </div>
                            </script>
                            {{-- <script id="dzAdditionalTemplate" type="text/template">
                                <div class="dz-additional-area text-muted position-relative form-control d-flex align-items-center justify-content-center">
                                    <svg class="opacity-75 dz-photo-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" />
                                    </svg>
                                </div>
                            </script>
                            <script id="dzLoadingOverlay" type="text/template">
                                <div class="dz-loading-div">
                                    <div class="top-0 bg-white position-absolute w-100 h-100 start-0 d-flex align-items-center justify-content-center rounded-3 z-3">
                                        <div class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </script>
                            <script id="dzSuccessMessage" type="text/template">
                                <div class="alert alert-success d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M9 12l2 2l4 -4" />
                                    </svg>
                                    <span class="ms-2">Images successfully uploaded.</span>
                                </div>
                            </script> --}}
                        </div>

                        {{-- <div class="table-responsive">
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
                                                        <a class="dropdown-item"
                                                            href="{{ route('advantages.edit', $item->id) }}"><i
                                                                class="bx bx-edit-alt me-1"></i>Ubah</a>
                                                        <form action="{{ route('advantages.destroy', $item->id) }}"
                                                            method="POST" id="delete-form-{{ $item->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a class="dropdown-item" href="javascript:void(0);"
                                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
                                                                <i class="bx bx-trash me-1"></i> Hapus
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> --}}
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
