<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Log In</title>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FFFFFF; /* Verde claro por defecto */
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar a {
            color: white !important;
        }
        .container {
            background-color: #FFFFFF; /* Verde claro */
            padding: 20px;
            border-radius: 8px;
        }
        .btn {
            font-size: 1.2em;
        }

        .btn-green {
            background-color: #28a745;
            color: white;
            transition: box-shadow 0.3s ease-in-out; /* Añade una transición suave para el box-shadow */
        }

        .btn-green:hover {
            background-color: #28a745;
            color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.9); /* Añade una sombra oscura para dar profundidad */
        }

        .btn-dark {
            background-color: #343a40;
            color: white;
            transition: box-shadow 0.3s ease-in-out; /* Añade una transición suave para el box-shadow */
        }

        .btn-dark:hover {
            color: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.9); /* Añade una sombra oscura para dar profundidad */
        }

        .w-50 {
            width: 50% !important;
        }
        .my-2 {
            margin: 10px 0 !important;
        }
    </style>
</head>
<body>
    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
