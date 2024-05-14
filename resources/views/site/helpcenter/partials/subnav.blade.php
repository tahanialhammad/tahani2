<div class="d-none d-md-block subnav">
    <ul class="nav flex-column fw-bold">
        @foreach($sections->sortBy('sort_order') as $section)
            <li class="nav-item">
            <!-- <a class="nav-link pt-0 {{ request()->is('helpcenter/'.$section->id.'*') ? 'active' : '' }}" aria-current="page" href="{{ route('site.helpcenter.show', ['section' => $section->id]) }}">{{ $section->name }}</a> -->

            <a class="nav-link pt-0 {{ request()->routeIs('site.helpcenter.show') && request()->route('section')->id == $section->id ? 'active' : '' }}" aria-current="page" href="{{ route('site.helpcenter.show', ['section' => $section->id]) }}">{{ $section->name }}</a>

            </li>
        @endforeach
    </ul>
</div>



{{-- Mobile version --}}
<div class="btn-group d-md-none w-100 bg-white border-2 border-light rounded-3 mb-4">
    <button type="button" class="btn text-start border-0" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $section->name }}
    </button>
    <button type="button" class="btn dropdown-toggle dropdown-toggle-split text-end border-0" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
    </button>

    <ul class="dropdown-menu w-100 p-2 fs-sm text-nowrap">
        @foreach($sections->sortBy('sort_order') as $section)
        <li class="nav-itemtt">
            <a class="nav-linktt pt-0 dropdown-item" aria-current="page" href="{{ route('site.helpcenter.show', ['section' => $section->id]) }}">{{ $section->name }}</a>
        </li>
        @endforeach
    </ul>

</div>