@extends('layouts.Auth')

@section('content')
<main class="main-content  mt-0">
    <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-start">
                <h4 class="font-weight-bolder">Sign In</h4>
                <p class="mb-0">Enter your email and password to sign in</p>
              </div>
              <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div><div class="mb-3">


                <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" required autofocus />
            </div> </div>

            <!-- Password -->
            <div class="mb-3">



                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div></div>

            <!-- Remember Me -->
            <div class="form-check form-switch">

                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                    <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>

            </div>

            <div class="text-center">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center pt-0 px-lg-2 px-1">
      <p class="mb-4 text-sm mx-auto">
        Don't have an account?
        <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Sign up</a>
      </p>
    </div>
  </div>
</div>
<div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
  <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
background-size: cover;">
    <span class="mask bg-gradient-primary opacity-6"></span>
    <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
    <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
  </div>
</div>
</div>
</div>
</div>
</section>

@endsection
