<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <script>
    (function() {
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    })();
</script>
</head>
<body style="background-image: url('images/Car.jpg'); background-size: cover;">



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        

        <div class="ml-auto">
            @auth  {{-- Show only if user is logged in --}}
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
@if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="container">
@yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".alert").fadeOut("slow");
        }, 3000); // 3 seconds
    });
</script>
</body>
</html>