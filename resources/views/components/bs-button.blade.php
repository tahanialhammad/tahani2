<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-dark rounded-pill px-4 fw-bold border-2 me-0 shadow-none']) }}>
    {{ $slot }}
</button>
