@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<div class="content">
    <x-backend.card>
        <x-slot name="header">
            @lang('Role Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.auth.role.create')"
                :text="__('Create Role')"
            />
        </x-slot>

        <x-slot name="body">
            <livewire:backend.roles-table />
        </x-slot>
    </x-backend.card>
</div>
@endsection
