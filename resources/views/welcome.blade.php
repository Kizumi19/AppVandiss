<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{asset('css/app.css')}}" defer></script>
</head>
<body>
    <h1>Benvingut!</h1>
    <a href="/contacte">Contacte</a>

    <a href="{{ route('contacte') }}"> Contacte (ruta amb nom)</a>
</body>
</html>