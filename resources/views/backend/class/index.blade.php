@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<div class="content">
    <x-backend.card>
        <x-slot name="header">
            @lang('Class List')
            <x-utils.link class="card-header-action text-dark" :href="route('admin.auth.user.index')" :text="__('Back')" />
        </x-slot>
        <x-slot name="body">
            <livewire:class-list />
        </x-slot>
    </x-backend.card>
  </div>
@endsection
