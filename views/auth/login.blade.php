<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Login </title>
    </head>
    <body>
        <h1> Inicio de sesión </h1>
        @if(isset($error))
            <p> <strong> {{ $error }} </strong> </p>
        @endif        
        {{ Form::open(array('url' => 'auth/login')) }}        
        {{ Form::label('email', 'Email') }}
        <br />
        {{ Form::text('email', '') }}
        <br />
        {{ Form::label('password', 'Contraseña') }}
        <br />
        {{ Form::password('password', '') }}
        <br />        
        {{ Form::submit('Enviar') }}        
        {{ Form::close() }}
    </body>
</html>