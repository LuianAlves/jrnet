<?php

include_once("conexao.php")

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$plano = filter_input(INPUT_POST, 'plano', FILTER_SANITIZE_STRING);


$result_Usuarios = "INSERT INT Usuarios(nome, email, celular, cpf, rg, endereco, cep, plano) VALUES('$nome', '$email', '$celular', '$cpf', '$rg', '$endereco', '$cep', '$plano')";

$resultado_Usuarios = mysqli_query($conn, $result_Usuarios);

?>



