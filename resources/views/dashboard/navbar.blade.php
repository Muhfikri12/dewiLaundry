<nav class="px-4 py-0 navbar navbar-expand bg-light navbar-light sticky-top">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="mb-0 text-primary"><i class="fa fa-hashtag"></i></h2>
    </a>
    <a href="#" class="flex-shrink-0 sidebar-toggler">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-envelope me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Message</span>
            </a>
            <div class="m-0 mt-2 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom"
                style="width: 14rem">

                @foreach ($message as $item)
                    <a href="{{ route('message.show', $item->id) }}" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            @php
                                // Get the created_at timestamp
                                $createdAt = $item->created_at;

                                // Get the time 15 minutes before created_at
                                $timeFifteenMinutesAgo = $createdAt->copy()->subMinutes(15);
                            @endphp
                            {{-- <img class="rounded-circle" src="{{ asset('asset/img/user.jpg') }}" alt=""
                                style="width: 40px; height: 40px;"> --}}
                            <div class="gap-2 ms-2 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fas fa-user-circle" style="font-size: 2.3rem"></i>
                                </div>
                                <div class="message-preview">
                                    <p class="mb-0 fw-normal"><small>{{ $item->name }}</small></p>
                                    <small>Pukul {{ $timeFifteenMinutesAgo->format('H:i') }}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                @endforeach
                <a href="{{ route('message.index') }}" class="text-center dropdown-item">See all message</a>
            </div>
        </div>
        {{-- <div class="nav-item dropdown">
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
        </div> --}}
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-user-circle me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
            </a>
            {{-- <a href="#" class="gap-2 nav-link dropdown-toggle d-flex align-items-center"
                data-bs-toggle="dropdown">
                <div class="icon">
                    <i class="fas fa-user-circle" style="font-size: 2.3rem"></i>
                </div>
                <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
            </a> --}}
            <div class="m-0 border-0 dropdown-menu dropdown-menu-end bg-light rounded-0 rounded-bottom">
                <a href="{{ route('profile.edit') }}" class="dropdown-item">My Profile</a>
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
