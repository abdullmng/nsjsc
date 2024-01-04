@extends('layouts.auth')
@section('title', 'Welcome')
@section('info', 'Sign in to continue')
@section('content')
<form class="js-validation-signin px-4" method="POST" action="/login">
  @csrf
  <div class="form-floating mb-4">
    <input type="text" class="form-control" id="login-username" name="username" placeholder="Enter your username">
    <label class="form-label" for="login-username">Username</label>
    @if ($errors->has('username'))
      <span class="text-danger text-small fs-sm">{{ $errors->first('username') }}</span>
    @endif
  </div>
  <div class="form-floating mb-4">
    <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password">
    <label class="form-label" for="login-password">Password</label>
    @if ($errors->has('password'))
      <span class="text-danger text-small fs-sm">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <div class="mb-4">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="remember">
      <label class="form-check-label" for="login-remember-me">Remember Me</label>
    </div>
  </div>
  <div>
    @if (session()->has('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
  </div>
  <div class="mb-4">
    <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
      Sign In
    </button>
    <div class="mt-4">
      <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="/forgot">
        Forgot Password
      </a>
    </div>
  </div>
</form>
@endsection
