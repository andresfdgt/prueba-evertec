<!DOCTYPE html>
<html lang="es">

<head>
    @include('layout.head')
    @yield('custom-style')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="border-radius: 0px">
        <a class="navbar-brand" href="/" style="color: white;">Tienda</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    @include('layout.scripts')
    @yield('custom.scripts')
</body>

</html>
