@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<div class="content">
    <div class="container-fluid">
<x-backend.card>

    <x-slot name="body">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">store</i>
                </div>
                <p class="card-category"><h3 class="text-dark">{{ Auth::user()->name }}</h3></p>

              </div>

            </div>
          </div>
    </x-slot>
</x-backend.card>

<x-backend.card>
    <x-slot name="header">
        @lang('Schedules')
    </x-slot>
    <x-slot name="body">
          <div class="d-flex justify-content-start">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                <div class="card-header card-header-success">
                    <h4 class="card-title" wire:click="add">Schedules</h4>
                </div>
                <div class="card-body table-responsive">

                    <livewire:student-class-schedule />
                </div>
                </div>
            </div>
            <div class="pl-5 w-50">

                    <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title" wire:click="add">Meetings</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <livewire:student-online-meeting  />
                    </div>
                    </div>

            </div>
        </div>
        <div class="d-flex justify-content-start">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                <div class="card-header card-header-danger">
                    <h4 class="card-title" wire:click="add">Modules</h4>
                </div>
                <div class="card-body table-responsive">

                    <livewire:student-module />
                </div>
                </div>
            </div>
            <div class="pl-5 w-50">

                    <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title" wire:click="add">Grades</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <livewire:student-grade  />
                    </div>
                    </div>

            </div>
        </div>
    </x-slot>


</x-backend.card>
{{--
<x-backend.card>
    <x-slot name="header">
        @lang('Meetings')
    </x-slot>
    <x-slot name="body">
          <div class="d-flex justify-content-start">
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-warning">
                <h4 class="card-title" wire:click="add">Meetings</h4>
              </div>
              <div class="card-body table-responsive">
                <livewire:online-meeting-table classId="{{ $details->id }}" />
              </div>
            </div>
          </div>
          <div class="pl-5 w-50">
            <x-backend.card>
                <x-slot name="header">
                    @lang('Add Meeting')
                </x-slot>
                <x-slot name="body">

                    <livewire:add-online-meeting classId="{{ $details->id }}" />

                </x-slot>
            </x-backend.card>
          </div>
        </div>
    </x-slot>


</x-backend.card>

<x-backend.card>
    <x-slot name="header">
        @lang('Modules')
    </x-slot>
    <x-slot name="body">
          <div class="d-flex justify-content-start">
          <div class="col-lg-6 col-md-12">
            <div class="card">
              <div class="card-header card-header-danger">
                <h4 class="card-title" wire:click="add">Modules</h4>
              </div>
              <div class="card-body table-responsive">
                <livewire:module-table classId="{{ $details->id }}" />
              </div>
            </div>
          </div>
          <div class="pl-5 w-50">
            <x-backend.card>
                <x-slot name="header">
                    @lang('Add Module')
                </x-slot>
                <x-slot name="body">

                    <livewire:add-module classId="{{ $details->id }}" />

                </x-slot>
            </x-backend.card>
          </div>
        </div>
    </x-slot>


</x-backend.card>
<x-backend.card>
    <x-slot name="header">
        @lang('Grades')
    </x-slot>
    <x-slot name="body">
          <div class="d-flex justify-content-start">
          <div class="col-lg-8 col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title" wire:click="add">Grades</h4>
              </div>
              <div class="card-body table-responsive">
                <livewire:grade-table classId="{{ $details->id }}" />
              </div>
            </div>
          </div>
          <div class="pl-5 w-50">
            <x-backend.card>
                <x-slot name="header">
                    @lang('Add Grade')
                </x-slot>
                <x-slot name="body">

                    <livewire:add-grade classId="{{ $details->id }}" />

                </x-slot>
            </x-backend.card>
          </div>
        </div>
    </x-slot>


</x-backend.card> --}}
</div>
</div>
</div>
@endsection
