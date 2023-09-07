@php
    $navLinks = collect([
        [
            'name' => 'Home',
            'route' => 'welcome',
        ],
        [
            'name' => 'Helpcenter',
            'route' => 'site.helpcenter.index',
        ],
    ]);
    $navClass = request()->routeIs('welcome') ? 'navbar-dark bg-dark' : 'navbar-light bg-white' ;
    $navBtnClass = request()->routeIs('welcome') ? 'light' : 'dark' ;
@endphp

<nav class="navbar navbar-expand-lg sticky-top {{ $navClass }}">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <svg viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" style="height: 50px">
                <path
                    d="M142.72 65.87a6.86 6.86 0 0 0-6.85 6.86h-5.2a6.85 6.85 0 0 0-13.68 0h-6.93a3.76 3.76 0 0 0-7.44 0H90.88a14.55 14.55 0 0 0-.72-4.19l13.61-5a3.76 3.76 0 0 0 7.06-1.83 3.57 3.57 0 0 0-.07-.74l6.71-2.47a3.75 3.75 0 1 0-.47-1.79 4 4 0 0 0 .1.86l-6.68 2.46a3.77 3.77 0 0 0-7.15 1.68 3.83 3.83 0 0 0 .12.9l-13.57 5a14.9 14.9 0 0 0-2.94-4.58L95 55a6.85 6.85 0 0 0 9.66-9.65l11.89-11.95a9.74 9.74 0 0 0 16.53-6 7.94 7.94 0 0 0 0-1 9.76 9.76 0 1 0-17.26 6.22L103.93 44.6a6.84 6.84 0 0 0-9.66 9.66l-8.09 8.09a15.64 15.64 0 0 0-3.48-2.43l11.66-25.23a9.49 9.49 0 0 0 3.39.62 9.71 9.71 0 0 0 9.7-8.77 7.94 7.94 0 0 0 0-1 9.76 9.76 0 1 0-14.01 8.76L81.79 59.49a14.88 14.88 0 0 0-5.31-1.14V41a6.85 6.85 0 0 0 0-13.63V14.14a3.8 3.8 0 1 0-1 0v13.25a6.85 6.85 0 0 0 0 13.68v17.29a14.79 14.79 0 0 0-4.17.76l-2.23-6.07a3.77 3.77 0 0 0-1.89-7 3.71 3.71 0 0 0-.67.07l-2.26-6.15a6.8 6.8 0 1 0-.94.35l2.25 6.11a3.77 3.77 0 0 0 1.62 7.18 3.45 3.45 0 0 0 1-.14l2.21 6a14.89 14.89 0 0 0-4.53 2.95l-4.69-4.69a3.74 3.74 0 0 0 .73-2.22 3.79 3.79 0 0 0-3.78-3.79 3.75 3.75 0 0 0-2.22.74l-3.7-3.7a3.83 3.83 0 0 0 .61-2.06A3.78 3.78 0 0 0 49 42.91a3.7 3.7 0 0 0-2 .62l-7.81-7.82A6.78 6.78 0 0 0 41 31a6.84 6.84 0 0 0-11.55-5l-.71.7.05.06a6.84 6.84 0 0 0 9.62 9.61l7.79 7.8a3.76 3.76 0 0 0 5.32 5.31l3.64 3.65a3.76 3.76 0 0 0 5.29 5.29l4.69 4.69a14.82 14.82 0 0 0-2.39 3.46l-19.45-9a10.45 10.45 0 0 0 .48-2.18v-1a9.78 9.78 0 1 0-.91 4.1l19.4 9a14.81 14.81 0 0 0-1.12 5.26H39.67a3.76 3.76 0 0 0-7.48 0H15.06a6.77 6.77 0 1 0 0 1h17.15a3.77 3.77 0 0 0 7.44 0h21.56a14.78 14.78 0 0 0 .79 4.13l-21.61 7.94a9.73 9.73 0 1 0 .36 3.75v-1a9.53 9.53 0 0 0-.18-1.79l21.68-8a15 15 0 0 0 2.9 4.51L55.56 93a6.85 6.85 0 0 0-9.67 9.67L36 112.5a9.75 9.75 0 1 0 3.11 8.16 8.21 8.21 0 0 0 0-1 9.68 9.68 0 0 0-2.46-6.45l9.88-9.89a6.85 6.85 0 0 0 9.64-9.64L65.91 84a15 15 0 0 0 3.43 2.4l-1.08 2.33a3.89 3.89 0 0 0-1-.16 3.78 3.78 0 0 0-2.1 6.93L61 104.46a9.75 9.75 0 1 0 6.37 10.14c0-.33.05-.66.05-1a9.76 9.76 0 0 0-5.5-8.76L66 96a3.64 3.64 0 0 0 1.19.22 3.77 3.77 0 0 0 2-7l1.06-2.29A14.77 14.77 0 0 0 75.48 88v22.88a3.77 3.77 0 0 0 0 7.53v9.32a6.86 6.86 0 1 0 1 0v-9.38a3.78 3.78 0 0 0 0-7.39V88a15.28 15.28 0 0 0 4.14-.71l9 24.6a9.76 9.76 0 1 0 13.51 10v-1a9.76 9.76 0 0 0-9.75-9.75 9.92 9.92 0 0 0-2.85.42L81.56 87a14.78 14.78 0 0 0 4.55-2.88l5.29 5.28a3.73 3.73 0 0 0-.5 1.84A3.79 3.79 0 0 0 94.68 95a3.73 3.73 0 0 0 1.84-.5l12.2 12.2a9.75 9.75 0 0 0 13.73 13.73l.07.07.7-.71a9.74 9.74 0 0 0 2.76-5.87 8.1 8.1 0 0 0 0-1A9.74 9.74 0 0 0 109.4 106L97.34 93.91A3.78 3.78 0 1 0 92 88.56l-5.17-5.17A15.21 15.21 0 0 0 89.27 80l17.26 8a6.78 6.78 0 0 0-.5 2.55A6.85 6.85 0 0 0 119 93.67l4.15 1.92a3.84 3.84 0 0 0-.07.69 3.81 3.81 0 1 0 .39-1.65l-4.07-1.88A6.85 6.85 0 0 0 107 87l-17.27-8a14.85 14.85 0 0 0 1.18-5.29h11.69a3.76 3.76 0 0 0 7.48 0H117a6.86 6.86 0 0 0 13.64 0H136a6.85 6.85 0 1 0 6.77-7.89zm-62.32 6.3a3.81 3.81 0 0 1 .08.59h-1.69zM77.94 72l1.59-1.59a4.07 4.07 0 0 1 .52.82zm-.33-1.08l.72-1.56a3.45 3.45 0 0 1 .5.35zm-1.13.08v-2.25a4.75 4.75 0 0 1 .94.2zm-1-.53l-.58-1.57a3.71 3.71 0 0 1 .58-.11zm-.75.85l-1.54-1.54a4.6 4.6 0 0 1 .78-.52zm-1.09.33L72.18 71a4.87 4.87 0 0 1 .32-.47zm.07 1.13H71.6a4.26 4.26 0 0 1 .18-.89zm-.54 1l-1.46.53a4.51 4.51 0 0 1-.09-.53zm.85.75L72.56 76a4.6 4.6 0 0 1-.49-.75zm.33 1.09L73.7 77a4.48 4.48 0 0 1-.44-.32zm1.13-.07v2.09a4.23 4.23 0 0 1-.87-.2zm1 .54l.52 1.47a3.31 3.31 0 0 1-.55.07zm.76-.85l1.52 1.52a4.27 4.27 0 0 1-.79.48zm1.08-.33l1.5.69a4 4 0 0 1-.34.47zm-.06-1.13h2.21a4.57 4.57 0 0 1-.21.92zm10.49-1h-6.1a6.59 6.59 0 0 0-.23-1.34l5.74-2.11a13.05 13.05 0 0 1 .59 3.43zm-.94-4.39l-5.73 2.11a6.69 6.69 0 0 0-1-1.6l4.31-4.31a12.67 12.67 0 0 1 2.42 3.78zm-3.14-4.5l-4.32 4.31a6.16 6.16 0 0 0-1.11-.78l2.56-5.54a12.77 12.77 0 0 1 2.87 1.99zm-3.78-2.43L78.33 67a6.63 6.63 0 0 0-1.85-.4v-6.1a12.65 12.65 0 0 1 4.41.94zm-5.41-.94v6.1a6.42 6.42 0 0 0-1.32.25l-2.11-5.73a12.6 12.6 0 0 1 3.43-.64zm-4.37 1l2.11 5.74a6.75 6.75 0 0 0-1.55 1l-4.31-4.31a12.56 12.56 0 0 1 3.75-2.48zm-4.46 3.17L71 69a6.21 6.21 0 0 0-.78 1l-5.53-2.55a12.77 12.77 0 0 1 1.96-2.81zm-2.38 3.75L69.82 71a6.71 6.71 0 0 0-.38 1.8h-6.1a12.73 12.73 0 0 1 .93-4.41zm-.92 5.37h6.1a6.73 6.73 0 0 0 .24 1.19L64 77.15a12.31 12.31 0 0 1-.65-3.39zm.95 4.33L70 76a6.68 6.68 0 0 0 1 1.53l-4.32 4.31a13 13 0 0 1-2.38-3.75zm3.12 4.43l4.31-4.31a7.33 7.33 0 0 0 1.07.74l-2.57 5.5a12.84 12.84 0 0 1-2.81-1.98zm3.72 2.41l2.56-5.55a6.6 6.6 0 0 0 1.78.41v6.1a12.54 12.54 0 0 1-4.34-1.01zm5.34 1v-6.19a6 6 0 0 0 1.29-.21l2.12 5.74a12.43 12.43 0 0 1-3.41.58zm4.35-.98l-2.11-5.73a6.37 6.37 0 0 0 1.57-1l4.31 4.31A12.61 12.61 0 0 1 80.83 85zm4.48-3.1L81 77.57a5.94 5.94 0 0 0 .78-1.08l5.55 2.56a12.35 12.35 0 0 1-2.02 2.83zm2.45-3.73l-5.55-2.56a6.27 6.27 0 0 0 .43-1.83h6.1a12.61 12.61 0 0 1-.98 4.37z" />
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($navLinks as $navLink)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs($navLink['route']) ? 'active' : ''}}"
                            aria-current="page"href="{{ route($navLink['route']) }}">{{ $navLink['name'] }}</a>
                    </li>
                @endforeach
            </ul>

            <div class="d-flex">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="btn btn-sm btn-outline-{{ $navBtnClass }} rounded-pill px-4 py-2 border-2 fw-bold shadow-none me-2">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="btn btn-sm btn-outline-{{ $navBtnClass }} rounded-pill px-4 py-2 border-2 fw-bold shadow-none">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-link text-{{ $navBtnClass }} text-decoration-none ">Register</a>
                            @endif

                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
