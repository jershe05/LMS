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
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">{{ $details->subject_name }}</p>
                    <h3 class="card-title"> {{ $details->user_name }}</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                     Grade : {{ $details->grade }}
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-start">
              <div class="col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Students</h4>
                  </div>
                  <div class="card-body table-responsive">

                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Classes</th>
                        <th>Grades</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Dakota Rice</td>
                          <td>$36,738</td>
                          <td>Niger</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Minerva Hooper</td>
                          <td>$23,789</td>
                          <td>Curaçao</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Sage Rodriguez</td>
                          <td>$56,142</td>
                          <td>Netherlands</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Philip Chaney</td>
                          <td>$38,735</td>
                          <td>Korea, South</td>
                        </tr>
                      </tbody>
                    </table>


                  </div>
                </div>
              </div>
              <div class="pl-5 w-50">
                <x-backend.card>
                    <x-slot name="header">
                        @lang('Add Student')
                    </x-slot>
                    <x-slot name="body">
                        <livewire:student-table />
                    </x-slot>
                </x-backend.card>
              </div>
            </div>
        </x-slot>
    </x-backend.card>
  </div>
@endsection
