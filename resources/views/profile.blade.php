@extends('layout')

@section('content')

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


        <h1>User Information</h1>
        <form action="{{route('edit')}}" method="post">
            @csrf
        @if(session('user'))
    <div class="mb-4 text-left">
        <strong>Email:</strong> <input type="text" class="form-control border-0" style="color: white; background-color: transparent; width: 100%;" value="{{ session('user')->email }}" name="editemail">
    </div>
    <div class="mb-4">
        <strong>Username:</strong> <input type="text" class="form-control border-0" style="color: white; background-color: transparent; width: 100%;" value="{{ session('user')->username }}" name="editusername">
    </div>
    <div class="mb-4">
        <strong>Password:</strong> <input type="text" class="form-control border-0" style="color: white; background-color: transparent; width: 100%;" value="{{ session('user')->password }}" name="editpassword">
    </div>
    <div class="mb-4">
    <input type="hidden"  value="{{ session('user')->id }}" name="id">
    </div>
@endif
        <input type="submit" class="btn btn-primary" value="Edit Information"></a>
        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
        
        </form> 
    </div>
@endsection