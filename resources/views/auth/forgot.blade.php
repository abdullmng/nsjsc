@extends('layouts.auth')
@section('title', 'Forgot Password')
@section('info', 'Enter your email address and we will send you steps to reset your password.')
@section('content')
<form class="js-validation-signin px-4" method="POST">
  @csrf
  <div class="form-floating mb-4">
    <input type="email" class="form-control" id="login-username" name="email" placeholder="Enter your email">
    <label class="form-label" for="login-username">Email</label>
    @if ($errors->has('email'))
      <span class="text-danger text-small fs-sm">{{ $errors->first('email') }}</span>
    @endif
  </div>
  <div>
    @if (session()->has('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
  </div>
  <div class="mb-4">
    <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
      Proceed
    </button>
    <div class="mt-4">
      <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="/">
        Back to login
      </a>
    </div>
  </div>
</form>
@endsection
