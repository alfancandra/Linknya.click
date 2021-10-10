<div>
    @if(session()->has('error'))
        <script>alert('{{ session('error') }}')</script>
        @php
        $editedLinkIndex==null;   
        @endphp
    @endif
    @foreach($shortlinks as $index => $short)
    <div class="card">
        <div class="card-header pl-2 pr-2 mt-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" style="width: 100px" value="{{ $short['link'] }}" disabled>
                <input type="text" class="form-control" id="copy-input" style="width: 100px" value="https://linknya.click/{{ $short['code'] }}" disabled>
                @if($editedLinkIndex !== $index)
                
                @else
                <input type="text" class="" style="width: 160px !important" value="https://linknya.click/" disabled>
                <input type="text" wire:model.defer="links.{{ $index }}.code" style="width: 300px !important">
                @endif
                

                @if($editedLinkIndex !== $index)
                <div class="input-group-append">
                    <button class="btn btn-primary" onclick="copyFunction()">Copy</button>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary" wire:click.prevent="editLink({{ $index }})">Edit</button>
                </div>
                @else
                <div class="input-group-append">
                    <button class="btn btn-primary" wire:click.prevent="saveLink({{ $index }})">Save</button>
                </div>
                <div class="input-group-append">
                    <button class="btn btn-primary" wire:click.prevent="cancel()">Cancel</button>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
