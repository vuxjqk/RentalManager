<form {{ $attributes->merge(['class' => 'inline']) }} method="post" onsubmit="return confirm('Are you sure?')">
    @csrf
    @method('DELETE')
    {{ $slot }}
</form>
