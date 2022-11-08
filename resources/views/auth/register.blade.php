<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="">
        @csrf 
        <input type = "text" name="username"> Usuario
        <input type = "email" name="email">Email
        <input type = "password" name="password">Clave
        <input type = "password" name="password_confirmation">Confirma
        <input type="submit" value="Registrarse">

    </form>
    
</body>
</html>