@extends('layout.master-mini')

@section('content')
<div class="content-wrapper d-flex align-items-center justify-content-center auth" style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <div class="auth-form-transparent text-left p-5 text-center">
        <img src="{{ url('assets/images/faces/face13.jpg') }}" class="lock-profile-img" alt="profile image">
        <form class="pt-5">
          <div class="form-group">
            <label for="examplePassword1">Password to unlock</label>
            <input type="password" class="form-control text-center" id="examplePassword1" placeholder="Password"> </div>
          <div class="mt-5">
            <a class="btn btn-block btn-success btn-lg font-weight-medium" href="{{ url('/') }}">Unlock</a>
          </div>
          <div class="mt-3 text-center">
            <a href="#" class="auth-link text-white">Sign in using a different account</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection