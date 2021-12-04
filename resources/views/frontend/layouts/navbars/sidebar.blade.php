<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="" class="simple-text logo-normal">
      {{ __('LMS') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
      {{-- <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}"> --}}
        {{-- <a class="nav-link" href="{{ route('home') }}"> --}}
            <a class="nav-link" href="{{ route('admin.dashboard') }}" >
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item">
        {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}"> --}}
        <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="true">
            <i class="material-icons">settings</i>
          <p>{{ __('Settings') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="settings">
          <ul class="nav">
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}"> --}}
              {{-- <a class="nav-link" href="{{ route('profile.edit') }}"> --}}
                <a class="nav-link" href="" >
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}"> --}}
              {{-- <a class="nav-link" href="{{ route('user.index') }}"> --}}
                <a class="nav-link" href="{{ route('admin.auth.user.index') }}" >
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}"> --}}
        <a class="nav-link" data-toggle="collapse" href="#classSection" aria-expanded="true">
            <i class="material-icons">content_paste</i>
          <p>{{ __('Class') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="classSection">
          <ul class="nav">
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}"> --}}
              <a class="nav-link" href="{{ route('admin.class.create') }}">
                <span class="sidebar-normal"> {{ __('Add Class') }} </span>
              </a>
            </li>
            <li class="nav-item">
                {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}"> --}}
                  {{-- <a class="nav-link" href="{{ route('profile.edit') }}"> --}}
                    <a class="nav-link" href="{{ route('admin.class.index') }}" >
                    <span class="sidebar-normal">{{ __('Class List') }} </span>
                  </a>
                </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}"> --}}
        <a class="nav-link" data-toggle="collapse" href="#teachers" aria-expanded="true">
            <i class="material-icons">edit</i>
          <p>{{ __('Teachers') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="teachers">
          <ul class="nav">
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}"> --}}
              {{-- <a class="nav-link" href="{{ route('profile.edit') }}"> --}}
                <a class="nav-link" href="{{ route('admin.teacher.index') }}" >
                <span class="sidebar-normal">{{ __('Teacher List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}"> --}}
        <a class="nav-link" data-toggle="collapse" href="#students" aria-expanded="true">
            <i class="material-icons">school</i>
          <p>{{ __('Students') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="students">
          <ul class="nav">
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}"> --}}
              {{-- <a class="nav-link" href="{{ route('profile.edit') }}"> --}}
                <a class="nav-link" href="{{ route('admin.student.index') }}" >

                <span class="sidebar-normal">{{ __('Student List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}"> --}}
        <a class="nav-link" data-toggle="collapse" href="#resources" aria-expanded="true">
            <i class="material-icons">book</i>
          <p>{{ __('Resources') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="resources">
          <ul class="nav">
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}"> --}}
              {{-- <a class="nav-link" href="{{ route('profile.edit') }}"> --}}
                <a class="nav-link" href="" >

                <span class="sidebar-normal">{{ __('Resources List') }} </span>
              </a>
            </li>
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}"> --}}
              {{-- <a class="nav-link" href="{{ route('user.index') }}"> --}}
                <a class="nav-link" href="" >

                <span class="sidebar-normal"> {{ __('Add Resources') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}"> --}}
        <a class="nav-link" data-toggle="collapse" href="#grades" aria-expanded="true">
            <i class="material-icons">note</i>
          <p>{{ __('Grades') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="grades">
          <ul class="nav">
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}"> --}}
              {{-- <a class="nav-link" href="{{ route('profile.edit') }}"> --}}
                <a class="nav-link" href="" >

                <span class="sidebar-normal">{{ __('Grade List') }} </span>
              </a>
            </li>
            <li class="nav-item">
            {{-- <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}"> --}}
              {{-- <a class="nav-link" href="{{ route('user.index') }}"> --}}
                <a class="nav-link" href="" >

                <span class="sidebar-normal"> {{ __('Add Grade') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      {{-- <li class="nav-item">
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
            <a class="nav-link" href="" >
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
            <a class="nav-link" href="" >
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
            <a class="nav-link" href="" >
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
            <a class="nav-link" href="" >
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
            <a class="nav-link" href="" >
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
            <a class="nav-link" href="" >
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
            <a class="nav-link" href="" >
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>
