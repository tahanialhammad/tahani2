@if (session('flash_message'))
<div class="alert alert-{{ session('flash_message')['level'] ?? 'success' }}">
    {{ session('flash_message')['message'] }}
</div>
@endif