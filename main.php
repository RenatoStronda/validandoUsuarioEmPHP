<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área Restrita</title>
</head>
<body>
    
    <?php session_start(); ?>
    <h3>Bem vindo, <?php echo $_SESSION["user"]; ?></h3>
    <a href="index.php"> Logout </a>
</body>
</html>