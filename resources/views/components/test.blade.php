@props(['message' => "", 'active' => false])

<h1 {{ $attributes }}>test blade components
{{ $slot }}
-- {{ $message}}
</h1>