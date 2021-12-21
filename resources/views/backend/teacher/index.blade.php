@extends('frontend.layouts.app')

@section('title', __('Teachers List'))

@section('content')
<div class="content">
    <x-backend.card>
        <x-slot name="header">
            <x-utils.link
            icon="c-icon cil-plus"
            class="card-header-action text-dark"
            :href="route('admin.auth.user.create')"
            :text="__('Add Teacher')"
        />
        </x-slot>
        <x-slot name="body">
            <livewire:teacher-table />
        </x-slot>
    </x-backend.card>
  </div>
@endsection
