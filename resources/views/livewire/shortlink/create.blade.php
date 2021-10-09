<div>
    <h1 class="text-light text-center">Create Fastest URL Shortener</h1>
    <div class="card">
        <div class="card-header pl-2 pr-2 mt-3">
            <form wire:submit.prevent="submit">
                <div class="input-group mb-3">
                    <input type="text" wire:model="link" class="form-control @error('link') is-invalid @enderror" placeholder="Enter URL"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Generate Shorten Link</button>
                    </div>
                </div>
                @error('link') <span class="error text-danger">{{ $message }}</span>@enderror
            </form>
        </div>
    </div>

    @if(session()->has('message'))
    <div class="card">
        <div class="card-header pl-2 pr-2 mt-3">
            {{ session('message') }}
        </div>
    </div>
    @endif
    
</div>
