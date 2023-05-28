@extends('layout')

@section('content')
<style>
    body {
      color: white;
    }
</style>

<div class="center-form">
  <form class="mx-1 mx-md-4 form-container" action="{{ route('register.post') }}" method="POST">
    @csrf
    <h2 class="text-center mb-4">Register</h2>
    <div class="form-group">
      <label for="form3Example1c" class="form-label">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user fa-lg fa-fw"></i></span>
        </div>
        <input type="text" id="form3Example1c" class="form-control" name="username" placeholder="User Name">
        @error('username')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="form3ExampleEmail" class="form-label">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope fa-lg fa-fw"></i></span>
        </div>
        <input type="email" id="form3ExampleEmail" class="form-control"name="email" placeholder="Your Email">
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="form3Example4c" class="form-label">Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-lock fa-lg fa-fw"></i></span>
        </div>
        <input type="password" id="form3Example4c" class="form-control" name="password"placeholder="Password">
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="form3Example4cd" class="form-label">Repeat your password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-key fa-lg fa-fw"></i></span>
        </div>
        <input type="password" id="form3Example4cd" class="form-control" name="re-passoword" placeholder="Repeat your password">
        @error('repassword')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary btn-lg custom-button " value="Register"></input>
    </div>
    <p class="text-center mt-4 login-message">Already a user? <a href="{{ url('/login') }}" class="login-link">Login here</a></p>
</form>
</div>
@endsection