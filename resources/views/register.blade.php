@extends('layouts.main')

@section('container')
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
  <form action="/register-user", method="post">
    @csrf
  <ul class="navbar-brand text-light" href="">
    <i class="bi bi-building"></i> | SG</ul>
    <h1 class="h3 mb-3 fw-normal text-light">Register your account</h1>

    <div class="form-floating ">
      <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Name">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating ">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="text" name="phone" class="form-control" id="floatingPassword" placeholder="Phone Number">
      <label for="floatingPassword">Phone Number</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="confirmation" placeholder="Confirm Password">
      <label for="floatingPassword">Confirm Password</label>
    </div>
  <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

  </form>


</main>
  @endsection
