<div>
    <h1 class="text-light text-center">Create Fastest URL Shortener</h1>
    <div class="card">
        <div class="card-header pl-2 pr-2 mt-3">
            <form wire:submit.prevent="submit">
                <div class="input-group mb-3">
                    <input type="url" wire:model="link" class="form-control @error('link') is-invalid @enderror" placeholder="Enter URL"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Generate Shorten Link</button>
                    </div>
                </div>
                @error('link') <span class="error text-danger">{{ $message }}</span>@enderror
            </form>
        </div>
    </div>

    @if(session()->has('link'))
    <div class="card">
        <div class="card-header pl-2 pr-2 mt-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="{{ session('link') }}" disabled>
                <input type="text" class="form-control ml-2 pl-2" id="copy-input" value="https://linknya.click/{{ session('code') }}" disabled>
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="copyFunction()">Copy</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    @auth
        @livewire('shortlink.index')
    @else 
    @endauth
    
</div>