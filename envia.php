<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $contato = addslashes($_POST['contato']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "gabrielh2007.scs@gmail.com";
    $assunto = "Coleta de dados - Portfolio";

    $corpo = "Nome: " . $nome . "\n" . 
             "E-mail: " . $email . "\n" . 
             "Telefone: " . $contato . "\n" . 
             "Mensagem: " . $mensagem;

    $cabeca = "From: gabrielh2007.scs@gmail.com" . "\n" . 
              "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" .phpversion();

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar e-mail!";
    }

?>