<div class="content">
    <!-- Navbar Start -->
    <nav class="px-4 py-0 navbar navbar-expand bg-light navbar-light sticky-top">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="mb-0 text-primary"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="flex-shrink-0 sidebar-toggler">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="border-0 form-control" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Message</span>
                </a>
                <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="mb-0 fw-normal">Jhon send you a message</h6>
                                <small>15 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="text-center dropdown-item">See all message</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bell me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Notificatin</span>
                </a>
                <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom">
                    <a href="#" class="dropdown-item">
                        <h6 class="mb-0 fw-normal">Profile updated</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="mb-0 fw-normal">New user added</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        <h6 class="mb-0 fw-normal">Password changed</h6>
                        <small>15 minutes ago</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="text-center dropdown-item">See all notifications</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                        style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                </a>
                <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom">
                    <a href="#" class="dropdown-item">My Profile</a>
                    <a href="#" class="dropdown-item">Settings</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();"
                            class="dropdown-item">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    {{-- <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a> --}}
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Sale & Revenue Start -->
    <div class="px-4 pt-4 container-fluid">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Sale</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Sale</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Revenue</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="p-4 rounded bg-light d-flex align-items-center justify-content-between">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Revenue</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Sales Chart Start -->
    <div class="px-4 pt-4 container-fluid">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="p-4 text-center rounded bg-light">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">Worldwide Sales</h6>
                        <a href="">Show All</a>
                    </div>
                    <canvas id="worldwide-sales"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="p-4 text-center rounded bg-light">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">Salse & Revenue</h6>
                        <a href="">Show All</a>
                    </div>
                    <canvas id="salse-revenue"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Sales Chart End -->


    <!-- Recent Sales Start -->
    <div class="px-4 pt-4 container-fluid">
        <div class="p-4 text-center rounded bg-light">
            <div class="mb-4 d-flex align-items-center justify-content-between">
                <h6 class="mb-0">Recent Salse</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 align-middle text-start table-bordered table-hover">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                            <th scope="col">Date</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>$123</td>
                            <td>Paid</td>
                            <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->


    <!-- Widgets Start -->
    <div class="px-4 pt-4 container-fluid">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="p-4 rounded h-100 bg-light">
                    <div class="mb-2 d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">Messages</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="py-3 d-flex align-items-center border-bottom">
                        <img class="flex-shrink-0 rounded-circle" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="py-3 d-flex align-items-center border-bottom">
                        <img class="flex-shrink-0 rounded-circle" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="py-3 d-flex align-items-center border-bottom">
                        <img class="flex-shrink-0 rounded-circle" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="pt-3 d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="img/user.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="p-4 rounded h-100 bg-light">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">Calender</h6>
                        <a href="">Show All</a>
                    </div>
                    <div id="calender"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="p-4 rounded h-100 bg-light">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h6 class="mb-0">To Do List</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="mb-2 d-flex">
                        <input class="bg-transparent form-control" type="text" placeholder="Enter task">
                        <button type="button" class="btn btn-primary ms-2">Add</button>
                    </div>
                    <div class="py-2 d-flex align-items-center border-bottom">
                        <input class="m-0 form-check-input" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="py-2 d-flex align-items-center border-bottom">
                        <input class="m-0 form-check-input" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="py-2 d-flex align-items-center border-bottom">
                        <input class="m-0 form-check-input" type="checkbox" checked>
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span><del>Short task goes here...</del></span>
                                <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="py-2 d-flex align-items-center border-bottom">
                        <input class="m-0 form-check-input" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 d-flex align-items-center">
                        <input class="m-0 form-check-input" type="checkbox">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <span>Short task goes here...</span>
                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widgets End -->

    @include('dashboard.footer')

</div>
