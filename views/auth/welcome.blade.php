<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Bievenido </title>
    </head>
    <body>
        <h1> Bienvenido {{ $user->real_name }} </h1>
        <p> Usted está ahora logueado </p>
        <p> {{ link_to('/auth/logout', 'Cerrar sesión') }} </p>
    </body>
</html>