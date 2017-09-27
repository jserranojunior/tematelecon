<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$emailEnviar = $_POST['emailEnviar'];

$message = "
Meu nome: $nome
Meu Email: $email
Meu assunto: $assunto
Meu telefone: $telefone
Minha mensagem: $mensagem";


$headers = 'From: FORMULARIO DO SITE <'.$email.'>'.PHP_EOL.
'X-Mailer: PHP/'.phpversion();


// Send
mail($emailEnviar, 'Formulario do site', $message, $headers);
$redirect = "./../../../../";
header("location:$redirect"); 
?> 

