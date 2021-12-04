@extends('frontend.layouts.app')

@section('title', __('Add Class'))

@section('content')
<div class="content">
    <x-backend.card>
        <x-slot name="header">
            @lang('Teacher List')

        </x-slot>
        <x-slot name="body">
            <livewire:student-table />
        </x-slot>
    </x-backend.card>
  </div>
@endsection
