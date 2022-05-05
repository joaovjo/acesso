<?php

$nome = $_POST["nome"];
$senha = $_POST["senha"];

if($nome != "admin" && $senha != "123") {
    echo '<script type="text/javascript"> alert("Login inválido! Tente novamente!");</script>';
    
    echo '<script>window.location="login.html";</script>';
}else {
    echo '<script type="text/javascript"> alert("Acesso permitido! Redirecionando!");</script>';

    echo '<script>window.location="restrito.php";</script>';
}

