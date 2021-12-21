<div>
    @if($message)
    <div class="form-row">
        <span class="error text-danger" role="alert">{{ $message }}</span>
    </div>
    @endif
    <div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="student">Select Student</label>
                <select id="student" wire:model="studentId" class="form-control" name="student" required>
                    <option selected>Choose...</option>
                    @foreach ($students as $student)
                    <option value="{{ $student->student_id }}">{{ $student->user->name }}</option>
                    @endforeach

                </select>
                </div>
                @error('studentId') <span class="error text-danger" role="alert">{{ $message }}</span> @enderror
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="period">Select Period</label>
                <select wire:model="period" id="period" class="form-control" name="period" required>
                    <option selected>Choose...</option>
                    <option value="first">First</option>
                    <option value="second">Second</option>
                    <option value="third">Third</option>
                    <option value="fourth">Fourth</option>
                </select>
                </div>
                @error('period') <span class="error text-danger" role="alert">{{ $message }}</span> @enderror
        </div>

    <div class="form-row" >
        <div class="col-md-10 mb-3"  wire:ignore>
           <label class="text-dark">Grade</label>
           <input wire:model="grade" type="text" class="form-control" required>
       </div>
       @error('grade') <span class="error text-danger" role="alert">{{ $message }}</span> @enderror
   </div>

    {{-- <x-embed url="https://www.youtube.com/watch?v=byMSnnQMZEM" /> --}}
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <button type="button" wire:click="add" class="btn btn-primary btn-sm">Add</button>
        </div>
    </div>

</div>
