@extends('frontend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">List of Class</h4>
              <p class="card-category">Teacher class</p>
            </div>
            <div class="card-body table-responsive">
                <livewire:teacher-class-table teacherId="{{ Auth::user()->id }}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
