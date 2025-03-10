@extends('layouts.master')

@section('page_title', 'Register')

@section('content')
<main class="form-signin w-100 m-auto">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-floating">
            <label for="name">Full Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}" placeholder="Full Name" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating">
            <label for="email">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" placeholder="Email Address" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating">
            <label for="office">Office</label>
            <input type="text" class="form-control @error('office') is-invalid @enderror" id="office" name="office"
                value="{{ old('office') }}" placeholder="Office" required>
            @error('office')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating">
            <label for="unit">Unit</label>
            <input type="text" class="form-control @error('unit') is-invalid @enderror" id="unit" name="unit"
                value="{{ old('unit') }}" placeholder="Unit" required>
            @error('unit')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        <p class="mt-3">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </form>
</main>

<!-- Bootstrap Modal for Success Message -->
<div class="modal fade" id="registerSuccessModal" tabindex="-1" aria-labelledby="registerSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerSuccessModalLabel">Registration Successful</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You have successfully registered! You can now <a href="{{ route('login') }}">log in</a>.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('login') }}'">
                    Go to Login
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Show Modal if Registration is Successful -->
@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var myModal = new bootstrap.Modal(document.getElementById('registerSuccessModal'));
        myModal.show();
    });
</script>
@endif

@endsection
