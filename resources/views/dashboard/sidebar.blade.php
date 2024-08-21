<div class="pb-3 sidebar pe-4">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="mx-auto my-3 navbar-brand justify-content-center">
            <h5 class="text-primary"><i class="fa fa-hashtag me-2"></i>Dewi Laundry</h5>
        </a>
        <div class="mb-4 d-flex align-items-center ms-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bottom-0 p-1 border border-white border-x-2 bg-success rounded-circle position-absolute end-0">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 " style="text-transform: uppercase">{{ Auth::user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}"
                class="nav-item nav-link {{ request()->is('dashboard') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('advantages.index') }}"
                class="nav-item nav-link {{ request()->is('dashboard/advantages') ? 'active' : '' }}"><i
                    class="fa fa-list me-2"></i>Advantages</a>
            <a href="{{ route('machine.index') }}"
                class="nav-item nav-link {{ request()->is('dashboard/machine') ? 'active' : '' }}"><i
                    class="fa fa-biohazard me-2"></i>Machine</a>
            <a href="{{ route('service.index') }}"
                class="nav-item nav-link {{ request()->is('dashboard/service') ? 'active' : '' }}"><i
                    class="fa fa-cogs me-2"></i>Service</a>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-item nav-link {{ request()->is('dashboard/about', 'dashboard/galery', 'dashboard/team', 'dashboard/client') ? 'active' : '' }} dropdown-toggle"
                    data-bs-toggle="dropdown"><i class="fa fa-landmark me-2"></i>Company Profile</a>
                <div class="m-0 bg-transparent border-0 dropdown-menu">
                    <a href="{{ route('about.index') }}" class="dropdown-item nav-item nav-link">About Us</a>
                    <a href="{{ route('galery.index') }}" class="dropdown-item nav-item nav-link">Gallery</a>
                    <a href="{{ route('team.index') }}" class="dropdown-item nav-item nav-link">Team Management</a>
                    <a href="{{ route('client.index') }}" class="dropdown-item nav-item nav-link">Client</a>

                </div>
            </div>
        </div>
    </nav>
</div>
