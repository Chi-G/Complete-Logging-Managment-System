@extends('templates.main')

@section('content')
<div class="form-container outer">
  <div class="form-form">
      <div class="form-form-wrap">
          <div class="form-container">
              <div class="form-content">

                  <h1 class="">Verify Email Address</h1>
                  <P>You must verify your email address to access this page</P>

                  <form class="text-left" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                      <div class="d-sm-flex justify-content-between">
                          <div class="field-wrapper">
                              <button type="submit" class="btn btn-primary" value="">Resend verification email</button>
                          </div>
                      </div>

                  </form>

                </div>                    
            </div>
        </div>
    </div>
</div>

    {{-- <P>You must verify your email address to access this page</P>

    
    <form method="POST" action="{{ route('verification.send') }}">
      @csrf
      <button type="submiy" class="btn btn-primary">Resend verification email</button>
    </form>
  </div> --}}
@endsection 