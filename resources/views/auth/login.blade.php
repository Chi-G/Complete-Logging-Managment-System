@extends('templates.main')

@section('content')
<div class="form-container outer">
  <div class="form-form">
      <div class="form-form-wrap">
          <div class="form-container">
              <div class="form-content">

                  <h1 class="">Sign In</h1>
                  <p class="">Log in to your account to continue.</p>

                  <form class="text-left" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form">

                        <div id="username-field" class="field-wrapper input">
                            <label for="email">Email</label>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                            <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ old('email') }}" placeholder="Email">
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                  {{ $message }}
                                </span>
                              @enderror
                        </div>

                        <div id="password-field" class="field-wrapper input mb-2">
                          <div class="d-flex justify-content-between">
                              <label for="password">Password</label>
                              <a href="{{ route('password.request') }}" class="forgot-pass-link">Forgot Password?</a>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                          <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Password">
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                {{ $message }}
                              </span>
                            @enderror
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </div>
                      <div class="d-sm-flex justify-content-between">
                          <div class="field-wrapper">
                              <button type="submit" class="btn btn-primary" value="">Log In</button>
                          </div>
                      </div>

                      <p class="signup-link">Not registered ? <a href="{{ route('register') }}">Create an account</a></p>

                    </div>
                  </form>

                </div>                    
            </div>
        </div>
    </div>
</div>

{{-- <div class="card">
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control  @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{ old('email') }}">
        @error('email')
          <span class="invalid-feedback" role="alert">
              {{ $message }}
          </span>
      @enderror
      </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror" id="password">
      @error('password')
          <span class="invalid-feedback" role="alert">
              {{ $message }}
          </span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    </form>
  <a href="{{ route('password.request') }}">Forgot Password? Reset Here!</a>
</div> --}}

@endsection 