<div class="d-flex align-items-center">
    <div class="user-search">
        <form class="user-search-form" action="#">
            <input type="text" class="form-control" placeholder="Search her">
            <ion-icon name="search-outline"></ion-icon>
        </form>
    </div>
    @auth
    <div class="mx-3">
        <ion-icon name="mail-outline"></ion-icon>
    </div>

    <div class="mx-3">
        <ion-icon name="notifications-outline"></ion-icon>
    </div>

    <x-bs-dropdown align="right" width="48">
        <x-slot name="trigger">
            {{ Auth::user()->name }}
            <img class="rounded-circle" src="https://picsum.photos/id/237/50/50" alt="">

        </x-slot>

        <x-slot name="content">
        <form method="POST" action="{{ route('logout') }}">
                            @csrf
            <x-bs-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-bs-dropdown-link>
            </form>
        </x-slot>
    </x-bs-dropdown>


    <!-- <div class="dropdown">
        <button class="btn btn-link text-decoration-none dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
            <img class="rounded-circle" src="https://picsum.photos/id/237/50/50" alt="">
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div> -->
    @endauth
</div>