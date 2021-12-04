@extends('frontend.layouts.app')

@section('title', __('Dashboard'))


@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">Users</h4>
                <p class="card-category"> Here you can manage users</p>
              </div>
              <div class="card-body">
                                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('admin.auth.user.create') }}" class="btn btn-sm btn-primary">Add user</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Created_at</th>
                      <th class="text-right">
                        Actions
                      </th>
                    </tr>
                </thead>
                <tbody>

                     @foreach ($users as $user)
                     <tr>
                     <td>{{ $user->type }}</td>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->created_at }}</td>
                     <td class="td-actions text-right">
                            <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('admin.auth.user.edit', $user) }}" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                            </a>
                        </td>
                    </tr>
                     @endforeach


                 </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
    {{-- <x-backend.card>
        <x-slot name="header">
            @lang('User Management')
        </x-slot>

        @if ($logged_in_user->hasAllAccess())
            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.auth.user.create')"
                    :text="__('Create User')"
                />
            </x-slot>
        @endif

        <x-slot name="body">

            {{-- <livewire:backend.users-table />
        </x-slot>
    </x-backend.card> --}}
@endsection
