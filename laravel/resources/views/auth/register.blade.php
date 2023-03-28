@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
    <div class="row ">
        <div class="col-md-4 mx-auto">

            <div class="card">
                <h5 class="card-header text-center fs-2" style="font-family:'deathshead', monospace">Daftar</h5>
                <div class="card-body">

                    <form method="POST" action="{{ url('register') }}">
                        @csrf

                        @if (session()->has('error_message'))
                            <div class="alert alert-danger" style="font-family:'futura-book', monospace">
                                {{ session()->get('error_message') }}</div>
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label"
                                style="font-family:'futura-book', monospace">Nama</label>
                            <input type="text" class="form-control" id="name"
                                style="font-family:'futura-book', monospace" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <small class="text-danger" style="font-family:'futura-book', monospace">{{ $errors->first('name') }}</small>
                            @endif
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"
                                style="font-family:'futura-book', monospace">Alamat email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                style="font-family:'futura-book', monospace">
                            @if ($errors->has('email'))
                                <small class="text-danger" style="font-family:'futura-book', monospace">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"
                                style="font-family:'futura-book', monospace">Kata sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label"
                                style="font-family:'futura-book', monospace">Konfirmasi kata sandi</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation">
                            @if ($errors->has('name'))
                                <small class="text-danger" style="font-family:'futura-book', monospace">{{ $errors->first('name') }}</small>
                            @endif
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-warning"
                                style="font-family:'futura-book', monospace">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
