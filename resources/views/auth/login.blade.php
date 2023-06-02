@extends('layout')

@section('content')
<style>
    body {
      color: white;
    }
</style>

<div class="center-form">
  <form class="mx-1 mx-md-4 form-container" action="{{ route('login.post') }}" method="POST">
    @csrf
    <h2 class="text-center mb-4">Login</h2>
    <div class="form-group">
      <label for="form3ExampleEmail" class="form-label">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope fa-lg fa-fw"></i></span>
        </div>
        <input type="email" id="form3ExampleEmail" class="form-control"name="email" placeholder="Your Email">
      </div>
      @error('email')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="form3Example4c" class="form-label">Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-lock fa-lg fa-fw"></i></span>
        </div>
        <input type="password" id="form3Example4c" class="form-control" name="password"placeholder="Password">
      </div>
      @error('password')
      <div class="text-danger">{{ $message }}</div>
      @enderror
        </div>
       
        
        <div class="form-group">
        <input type="submit" class="btn btn-primary btn-lg custom-button " value="Login"></input>
        </div>
        @if(session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
@endif
        <p class="text-center mt-4 login-message">New to the site? <a href="{{ url('/registration') }}" class="login-link">Signup here</a></p>
    </form>
</div>
@endsection