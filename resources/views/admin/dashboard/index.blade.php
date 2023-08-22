<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

<body>
    <main>
        <aside class="bg-dark vh-100 text-light" id="nav-bar">
            @include('admin.partials.nav')
        </aside>

        <section class="page-content" id="body-pd">
            <div id="app">
                @include('admin.partials.topbar')
                <div class="p-4">
                    <h1>content</h1>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
