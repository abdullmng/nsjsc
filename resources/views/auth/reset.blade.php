@extends('layouts.auth')
@section('title', 'Reset Password')
@section('info', 'Create a new password')
@section('content')
<form class="js-validation-signin px-4" method="POST">
  @csrf
  <input type="hidden" name="token" value="{{ request()->token }}">
  <input type="hidden" name="email" value="{{ request()->email }}">
  <div class="form-floating mb-4">
    <input type="password" class="form-control" id="login-username" name="password" placeholder="Enter your password">
    <label class="form-label" for="login-username">Password</label>
    @if ($errors->has('password'))
      <span class="text-danger text-small fs-sm">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <div class="form-floating mb-4">
    <input type="password" class="form-control" id="login-username" name="password_confirmation" placeholder="Enter your password again">
    <label class="form-label" for="login-username">Confirm Password</label>
  </div>

  <div class="mb-4">
    <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
      Reset
    </button>
    <div class="mt-4">
      <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="/">
        Back to login
      </a>
    </div>
  </div>
</form>
@endsection
