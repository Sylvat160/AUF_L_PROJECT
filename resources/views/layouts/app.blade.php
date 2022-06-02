<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>AUF</title>
</head>
<body>
    <div class="corps partials">
        @include('partials.header')
    </div>
    

    @yield('content')
    <div class="foot pied">
        @include('partials.footer')
    </div>
    
    
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/app.js ')}}"></script>
</body>
</html>