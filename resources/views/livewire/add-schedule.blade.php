<div>
    <div div wire:ignore.self class="modal fade" id="addSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Add Leader</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="form-row">
                    <div class="form-group col-12 pl-0">
                        <label for="inputState"><h5>Scope</h5></label>
                    </div>
                    <div class="form-group col-12 pl-0">
                        <div class="form-check form-check-inline">
                            <input wire:model="scopeType" wire:change="selectScopeType" class="form-check-input" id="geographical" type="radio" name="scope['type']"  value="geographical" checked>
                            <label class="form-check-label" for="geographical">Geographical</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input wire:model="scopeType" wire:change="selectScopeType" class="form-check-input" id="sectoral" type="radio" name="scope['type']"  value="sectoral">
                            <label class="form-check-label" for="sectoral">Sectoral</label>
                          </div>
                    </div>
                </div>

                    {{-- @if($scopeType)
                        <div class="form-row">
                            <div class="form-group col-12 pl-0">
                                <label for="inputState"><h5>Personal Information</h5></label>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name" required>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="gender">Gender</label>
                                <select id="gender" class="form-control" name="gender" required>
                                    <option selected>Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                </div>
                            <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone" placeholder="09XXXXXXXXX" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="birthday">Birthdate</label>
                                <input type="date" class="form-control" id="birthday" name="birthday" required>
                                </div>
                        </div>
                        <input type="hidden" class="form-control" name="roles[leader]" value="2">
                        <input type="hidden" class="form-control" name="type" value="admin">
                        <input type="hidden" class="form-control" name="added_by" value="{{ Auth::user()->id }}">
                        <input type="hidden" class="form-control" name="candidate_id" value="">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Leader</button>
                        </div>
                    @endif --}}

            </div>

          </div>
        </div>
      </div>
</div>
