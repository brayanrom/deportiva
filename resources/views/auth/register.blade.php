@extends('layouts.app')

@section('content')
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://i.pinimg.com/originals/e3/fa/24/e3fa24598cd6cf6806d105749beadc97.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(50px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
          <h2 class="fw-bold mb-5">{{ __('Register') }}</h2>
          <form method="POST" action="{{ route('register') }}">
		@csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">

                </div>
              </div>
              <div class="form-outline mb-4">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  <label class="form-label" for="form3Example1">{{ __('Name') }}</label>
		                         @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              <label class="form-label" for="email">{{ __('Email Address') }}</label>
		@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              <label class="form-label" for="password">{{ __('Password') }}</label>
	      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
              @enderror
            </div>
  	   <!--Confirm Password input -->
 	   <div class="form-outline mb-4">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
	      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
              @enderror
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
               {{ __('Register') }}
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
@endsection
