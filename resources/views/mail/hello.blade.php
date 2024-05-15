<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>

</head>
<body>
    <div class="container">
        @if(Auth::check())
            <!--<h1>Bienvenido, {{ Auth::user()->name }}!</h1> -->
            <!--<p>¡Gracias por registrarte en nuestro sitio!</p> -->
        @else
            <h1>Bienvenido!</h1>
            <h2>Gracias por registrarte en mi sitio WEB!.</h2>
        @endif
    </div>
</body>
</html>
