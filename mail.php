<?php
// Recebendo dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$plano = $_POST['plano'];
$tipo = $_POST['tipo'];

$message = $_POST['message'];


$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "CADASTRO Site <br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "Email: " . $email . " <br>";
$corpo .= "CPF: " . $cpf . " <br>";
$corpo .= "RG: " . $rg . " <br>";
$corpo .= "Celular: " . $celular . " <br>";
$corpo .= "Endereço: " . $endereco . " <br>";
$corpo .= "CEP: " . $cep . " <br>";
$corpo .= "Plano: " . $plano . " <br>";
$corpo .= "Tipo: " . $tipo . " <br>";
$corpo .= "Mensagem: " . $message . " <br>";


// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'contato@jrnetcomunicacao.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header('location:index.php?status=sucesso');
else:
  // Se der erro
  header('location:index.php?status=erro');
endif;
?>