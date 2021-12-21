<div>
     @if($message)
        <div class="form-row">
            <span class="error text-danger" role="alert">{{ $message }}</span>
        </div>
    @endif
    <div class="form-row">

        <div class="col-md-6 mb-3">

            <label class="text-dark">Day</label>
            <select wire:model="day" class="custom-select" id="validationDefault03" required>
              <option selected value="">Choose...</option>
              <option value="Monday">Monday</option>
              <option value="Tuesday">Tuesday</option>
              <option value="Wednesday">Wednesday</option>
              <option value="Thursday">Thursday</option>
              <option value="Friday">Friday</option>
            </select>
            @error('day') <span class="error text-danger" role="alert">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">

                <label class="text-dark">From</label>
                <input wire:model="from" type="time" class="form-control" id="validationCustom03" required>
                @error('from') <span class="error text-danger" role="alert">{{ $message }}</span> @enderror
            </div>
             <div class="col-md-6 mb-3">

                <label class="text-dark">To</label>
                <input wire:model="to" type="time" class="form-control" id="validationCustom03" required>
                @error('to') <span class="error text-danger" role="alert">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <button type="button" wire:click="add" class="btn btn-primary btn-sm">Add</button>
            </div>
        </div>

</div>
