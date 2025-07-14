<form {{ $attributes->merge(['class' => 'relative w-full sm:w-96']) }} method="get">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <i class="fas fa-search text-gray-400"></i>
    </div>
    {{ $slot }}
</form>
