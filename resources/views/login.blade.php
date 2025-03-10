@extends('layouts.master')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow-lg" style="width: 400px; border-radius: 10px;">
        <div class="card-body">
            <div class="text-center">
                <img class="mb-3" src="{{ asset('images/depedlogo.jpg')  }}" alt="depedlogo" width="100" height="60">
                <h2 class="h4 mb-3">Login</h2>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-floating mb-3">
                <label for="email">Email address</label>
                    <input type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="name@example.com"
                        required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                <label for="password">Password</label>
                    <input type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        id="password"
                        name="password"
                        placeholder="Password"
                        required>
                  
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>

            <p class="mt-3 text-center">Don't have an account? <a href="{{ route('register.form') }}">Register here</a></p>
        </div>
    </div>
</div>
@endsection
