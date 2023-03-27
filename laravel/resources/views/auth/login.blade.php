@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row ">
    <div class="col-md-4 mx-auto">

        <div class="card">
  <h5 class="card-header text-center fs-2" style="font-family:'deathshead', monospace">Login</h5>
  <div class="card-body">
    
    <form method="POST" action="{{ url('login') }}">
      @csrf

      @if (session()->has('error_message'))
            <div class="alert alert-danger" style="font-family:'futura-book', monospace">{{ session()->get('error_message')  }}</div>
      @endif      

      @if (session()->has('error_msg'))
            <div class="alert alert-warning" style="font-family:'futura-book', monospace">{{ session()->get('error_msg')  }}</div>
      @endif      

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="font-family:'futura-book', monospace">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" style="font-family:'futura-book', monospace">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="font-family:'futura-book', monospace">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-warning" style="font-family:'futura-book', monospace">Login</button>
        </div>
        </form>
  </div>
</div>
@endsection
        

