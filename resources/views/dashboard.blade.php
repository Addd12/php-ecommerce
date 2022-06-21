<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit(); " role="button">
                    <i class="fas fa-sign-out-alt"></i>

                    {{ __('Log Out') }}
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
