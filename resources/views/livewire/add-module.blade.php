<div>
    @if($message)
    <div class="form-row">
        <span class="error text-danger" role="alert">{{ $message }}</span>
    </div>
    @endif
    <div wire:ignore>


    <div class="form-row">
        <div class="col-md-10 mb-3">
           <label class="text-dark">File Link</label>
           <input wire:model="file" type="text" class="form-control" required>
       </div>
   </div>
    <div class="form-row">
         <div class="col-md-12 mb-3">
            <label class="text-dark">Description</label>
            <input wire:model="description" type="text" class="form-control" required>
        </div>
    </div>

    {{-- <x-embed url="https://www.youtube.com/watch?v=byMSnnQMZEM" /> --}}
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <button type="button" wire:click="add" class="btn btn-primary btn-sm">Add</button>
        </div>
    </div>

</div>
