<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALERTA DE INICIO DE SESION</title>

</head>
<body>
    <div class="container">
        @if(Auth::check())
            <h1>ALERTA DE INICIO DE SESION, {{ Auth::user()->name }}!</h1>
        @endif
    </div>
</body>
</html>
