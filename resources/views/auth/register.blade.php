<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registre</title>
</head>
<body>
    <form action="">
        {{-- Per agregar el nostre camp ocult per poder
            controlar un token i per evitar problemes de seguretat --}}
        @csrf
        <input type="text" name="username">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <input type="submit" value="Registrar">
    </form>
</body>
</html>