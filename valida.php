<?php
    $usuario = $_POST["usuario"];
    if (isset($usuario) && !empty($usuario))
    {
        session_start();
        $_SESSION["user"] = $usuario;
        header("location:main.php");
    }
    else
    {
        header("location:index.php");
    }
?> 