<nav class="h-100 overflow-hiddenttt overflow-auto">
    <div>
        <!-- brand -->
        <div class="mt-4">
            <a href="/">
                <div class="SidebarLogo"></div>
            </a>
        </div>
        <!-- / brand -->

        <ul class="nav flex-column flex-nowrap text-capitalize mt-5">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-white" href="{{ route('dashboard') }}">
                    <icon-home class="icon icon-inverted"></icon-home>
                    <span class="ps-3">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-white" href="{{ route('admin.helpcenter') }}">
                  <icon-info class="icon icon-inverted"></icon-info>
                    <span class="ps-3">Helpcenter</span>
                </a>
            </li>
        </ul>

    </div>
</nav>