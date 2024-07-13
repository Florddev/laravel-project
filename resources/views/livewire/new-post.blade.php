<form wire:submit="postMessage">
    @if (session()->has('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <input type="text" wire:model="content">
    <div>
        @error('content')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit">Poster le message</button>
</form>
