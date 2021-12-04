@extends('frontend.layouts.app')

@section('title', __('Login'))

@section('content')
<div class="container" style="height: auto;">
    <div class="row align-items-center">
      {{-- <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
        <h3>{{ __('Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.') }} </h3>
      </div> --}}
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
        <form class="form" method="POST" action="{{ route('frontend.auth.login') }}">
          @csrf
          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title"><strong>{{ __('Login') }}</strong></h4>
              <div class="social-line">
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
                <h3>Welcome back!</h3>
              <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">email</i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" required>
                </div>
                @if ($errors->has('email'))
                  <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                    <strong>{{ $errors->first('email') }}</strong>
                  </div>
                @endif
              </div>
              <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" required>
                </div>
                @if ($errors->has('password'))
                  <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                    <strong>{{ $errors->first('password') }}</strong>
                  </div>
                @endif
              </div>
              <div class="form-check mr-auto ml-3 mt-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
            </div>
            <div class="card-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Lets Go') }}</button>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-6">
              @if (Route::has('frontend.auth.password.request'))
                  <a href="{{ route('frontend.auth.password.request') }}" class="text-light">
                      <small>{{ __('Forgot password?') }}</small>
                  </a>
              @endif
          </div>
          <div class="col-6 text-right">
              <a href="{{ route('frontend.auth.register') }}" class="text-light">
                  <small>{{ __('Create new account') }}</small>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
    {{-- <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-frontend.card>
                    <x-slot name="header">
                        @lang('Login')
                    </x-slot>

                    <x-slot name="body">
                        <x-forms.post :action="route('frontend.auth.login')">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">@lang('E-mail Address')</label>

                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('E-mail Address') }}" value="{{ old('email') }}" maxlength="255" required autofocus autocomplete="email" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">@lang('Password')</label>

                                <div class="col-md-6">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password') }}" maxlength="100" required autocomplete="current-password" />
                                </div>
                            </div><!--form-group-->

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input name="remember" id="remember" class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }} />

                                        <label class="form-check-label" for="remember">
                                            @lang('Remember Me')
                                        </label>
                                    </div><!--form-check-->
                                </div>
                            </div><!--form-group-->

                            @if(config('boilerplate.access.captcha.login'))
                                <div class="row">
                                    <div class="col">
                                        @captcha
                                        <input type="hidden" name="captcha_status" value="true" />
                                    </div><!--col-->
                                </div><!--row-->
                            @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-primary" type="submit">@lang('Login')</button>

                                    <x-utils.link :href="route('frontend.auth.password.request')" class="btn btn-link" :text="__('Forgot Your Password?')" />
                                </div>
                            </div><!--form-group-->

                            <div class="text-center">
                                @include('frontend.auth.includes.social')
                            </div>
                        </x-forms.post>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-8-->
        </div><!--row-->
    </div><!--container--> --}}
@endsection
