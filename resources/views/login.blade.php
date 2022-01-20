@extends('layouts.main')

@section('container')
@php
    if(isset($_COOKIE['email'])&&isset($_COOKIE['password'])){
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
        $remembered = "checked='checked'";
    }else{
        $email = '';
        $password = '';
        $remembered ="";
    }
@endphp
@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Oops Something went wrong! <br/> </strong>
    @foreach ($errors->all() as $err)
    {{-- <h1>{{$err}}</h1> --}}
    {{$err}}<br/>
    @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<main class="form-signin">
  <form action="/login-user" method="post">
    @csrf
  <ul class="navbar-brand text-light" href="">
    <i class="bi bi-building"></i> | SG</ul>
    <h1 class="h3 mb-3 fw-normal text-light">Please sign in</h1>

    <div class="form-floating ">
      <input type="email" class="form-control" name="email" id="floatingInput" value="{{$email}}" placeholder="name@example.com">
      <label for="floatingInput" >Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" value="{{$password}}"placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3 text-light">
      <label>
        <input type="checkbox" name="remember_me"{{$remembered}} > Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    {{-- <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button> --}}

    {{-- <a href="/register">Sign Up</a> --}}

    </form>
    <a class="btn btn-primary mt-3" href="#" role="button">Sign In With Google</a>
    <a class="btn btn-primary mt-3" href="/register" role="button">Sign Up</a>



</main>
  @endsection
