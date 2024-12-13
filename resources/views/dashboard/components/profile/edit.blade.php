{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="p-0 bg-white container-xxl position-relative d-flex">
    <div class="content">
        @include('dashboard.navbar')
        <div class="gap-3 p-4 bg-white shadow sm:rounded-lg">
            {{-- <div class=""> --}}
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
            {{-- </div> --}}

            {{-- <div class=""> --}}
            <div class="max-w-xl mt-4">
                @include('profile.partials.update-password-form')
            </div>
            {{-- </div> --}}
        </div>

        <div class="p-4 mt-2 bg-white shadow sm:p-8 sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
{{-- </x-app-layout> --}}
