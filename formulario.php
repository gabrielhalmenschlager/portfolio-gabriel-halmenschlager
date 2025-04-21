<?php

$nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$contato = filter_var($_POST['contato'], FILTER_SANITIZE_STRING);
$mensagem = filter_var($_POST['mensagem'], FILTER_SANITIZE_STRING);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail inválido.";
    exit;
}

$para = "gabrielh2007.scs@gmail.com";
$assunto = "Coleta de dados - Portfolio";

$corpo = "Nome: " . $nome . "\r\n" . 
         "E-mail: " . $email . "\r\n" . 
         "Telefone: " . $contato . "\r\n" . 
         "Mensagem: " . $mensagem;

$cabeca = "From: gabrielh2007.scs@gmail.com\r\n" . 
          "Reply-To: " . $email . "\r\n" .
          "X-Mailer: PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Houve um erro ao enviar o e-mail!";
}

?>
