@extends('layouts.Auth.Login_layouts')
@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
      </div>
    </div>
    <div class="container">
      <div class="row  mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0 p-1">
            <div class="card-body">
              <form role="form" action="{{route('login')}}" method='post'>
                @csrf
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                  @error('email')
                  <small class="text-danger">
                      {{$message}}
                  </small>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" name='password' class="form-control" placeholder="Password" aria-label="Password">
                  @error('password')
                  <small class="text-danger">
                      {{$message}}
                  </small>
                  @enderror
                </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                </div>
                <div class="text-center px-3">
                  <button type="submit" class="btn bg-gradient-dark w-100 mb-2">Sign in</button>
                </div>
                <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="{{route('register')}}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
