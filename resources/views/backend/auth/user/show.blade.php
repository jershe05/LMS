@extends('frontend.layouts.app')

@section('title', __('View User'))

@section('content')
<div class="content">
    <x-backend.card>
        <x-slot name="header">
            @lang('View User')
            <x-utils.link class="card-header-action text-dark" :href="route('admin.auth.user.index')" :text="__('Back')" />
        </x-slot>
        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('Type')</th>
                    <td>{{ Str::of($user->type)->upper() }}</td>
                </tr>


                <tr>
                    <th>@lang('Name')</th>
                    <td>{{ $user->name }}</td>
                </tr>

                <tr>
                    <th>@lang('E-mail Address')</th>
                    <td>{{ $user->email }}</td>
                </tr>

                <tr>
                    <th>@lang('Status')</th>
                    <td>@include('backend.auth.user.includes.status', ['user' => $user])</td>
                </tr>

                <tr>
                    <th>@lang('Verified')</th>
                    <td>@include('backend.auth.user.includes.verified', ['user' => $user])</td>
                </tr>
            </table>
        </x-slot>

        <x-slot name="footer">
            <small class="float-right text-muted">
                <strong>@lang('Account Created'):</strong> @displayDate($user->created_at) ({{ $user->created_at->diffForHumans() }}),
                <strong>@lang('Last Updated'):</strong> @displayDate($user->updated_at) ({{ $user->updated_at->diffForHumans() }})

                @if($user->trashed())
                    <strong>@lang('Account Deleted'):</strong> @displayDate($user->deleted_at) ({{ $user->deleted_at->diffForHumans() }})
                @endif
            </small>
        </x-slot>
    </x-backend.card>
</div>
@endsection
