<?php
session_start();
extract($_POST);

if($nome == "admin" && $senha == "123") {
    $_SESSION['usuario'] = [
        'nome' => $nome,
        'senha' => $senha
    ];
    header ("Content-type: application/json");
    echo (json_encode(["mensagem" => "OK"]));
}
else {
    echo "Usuário ou senha inválidos!";
}