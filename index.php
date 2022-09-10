<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
<?php 
    session_start();
    session_unset();
    session_destroy();
?>
<form method="POST" action="valida.php">
        <label> Digite Seu Usuário: </label>
        <input type="text" name="usuario"><br>
        <input type="submit" value="Entrar">
</form>
</body>
</html>