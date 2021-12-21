<div>
    @if($message)
        <div class="form-row">
            <span class="error text-danger" role="alert">{{ $message }}</span>
        </div>
    @endif
    <div wire:ignore>
    <div class="form-row">

        <div class="col-md-12 mb-3"  >
            <label class="text-dark">Description</label>
            <textarea wire:model="description" class="form-control border border-1" rows="8" > </textarea>
            @error('description') <span class="error text-danger" role="alert">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="form-row">
             <div class="col-md-12 mb-3">
                <label class="text-dark">Video Link</label>
                <input wire:model="videoLink" type="text" class="form-control" required placeholder="ex. https://www.youtube.com/watch?v=3voR1aEvEzE">
            </div>
        </div>

            <label class="text-dark">Date</label>
            <input wire:model="date" type="date" class="form-control" required>
            @error('date') <span class="error text-danger" role="alert">{{ $message }}</span> @enderror

        {{-- <x-embed url="https://www.youtube.com/watch?v=byMSnnQMZEM" /> --}}
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <button type="button" wire:click="add" class="btn btn-primary btn-sm">Add</button>
            </div>
        </div>
    </div>
</div>
