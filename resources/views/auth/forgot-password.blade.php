@extends('templates.main')

@section('content')
<div class="form-container outer">
  <div class="form-form">
      <div class="form-form-wrap">
          <div class="form-container">
              <div class="form-content">

                  <h1 class="">Password Recovery</h1>
                  <p class="signup-link recovery">Enter your email and instructions will sent to you!</p>

                  <form class="text-left" method="POST" action="{{ route('password.email') }}">
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

                      <div class="d-sm-flex justify-content-between">
                          <div class="field-wrapper">
                              <button type="submit" class="btn btn-primary" value="">Reset Password</button>
                          </div>
                      </div>

                    </div>
                  </form>

                </div>                    
            </div>
        </div>
    </div>
</div>





  {{-- <div class="card">
    <form method="POST" action="{{ route('password.email') }}">
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
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </form>
  </div> --}}
@endsection 