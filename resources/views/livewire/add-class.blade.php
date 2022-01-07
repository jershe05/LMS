<div>
    <x-backend.card>
        <x-slot name="header">
            @lang($formTitle)
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.auth.user.index')" :text="__('Cancel')" />
        </x-slot>

        <x-slot name="body">
            @include('includes.partials.messages')
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="container" style="height: auto;"  >
                <div class="row align-items-center">
                  {{-- <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
                    <h3>{{ __('Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.') }} </h3>
                  </div> --}}
                  <div class="col-lg-8 col-md-6  ml-auto mr-auto">

                      <div class="card card-login card-hidden mb-3">
                        <div class="card-body" >
                          <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">person</i>
                                </span>
                              </div>
                              <select wire:model="teacher" class="form-control" wire:ignore.self>
                                <option value="" selected>Choose</option>
                                  @foreach ($teachers as $cher)
                                    @if($teacher === $cher)
                                        <option value="{{ $cher->id }}" selected>{{ $cher->name }}</option>
                                    @else
                                        <option value="{{ $cher->id }}">{{ $cher->name }}</option>
                                    @endif
                                  @endforeach
                              </select>
                              {{-- <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" required> --}}
                            </div>
                            @if ($errors->has('email'))
                              <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                <strong>{{ $errors->first('email') }}</strong>
                              </div>
                            @endif
                          </div>
                          <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">subject</i>
                                </span>
                              </div>
                              <select wire:model="subject" class="form-control">
                                    <option selected>Select Subject</option>
                                  @foreach ($subjects as $sub)
                                    @if($sub === $subject)
                                        <option value="{{ $sub->id }}" selected>{{ $sub->name }}</option>
                                    @else
                                        <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                    @endif
                                  @endforeach
                              </select>
                              {{-- <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" required> --}}
                            </div>
                            @if ($errors->has('email'))
                              <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                <strong>{{ $errors->first('email') }}</strong>
                              </div>
                            @endif
                          </div>
                          <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">grade</i>
                                </span>
                              </div>
                              <select wire:model="grade" class="form-control">
                                @if($details)
                                    <option value="{{ $details->grade }}" selected>{{ $selectedGradeLevel }}</option>
                                @else
                                    <option selected>Select Grade</option>
                                @endif
                                @foreach ($gradeLevels as $key => $gradeLevel)

                                    <option value="{{ $key }}">{{ $gradeLevel }}</option>
                                @endforeach
                              </select>
                              {{-- <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" required> --}}
                            </div>

                          </div>
                        </div>
                        <div class="card-footer justify-content-center">
                          <button type="submit" class="btn btn-primary " wire:click="add">{{ __($btnLabel) }}</button>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
        </x-slot>
    </x-backend.card>
</div>
