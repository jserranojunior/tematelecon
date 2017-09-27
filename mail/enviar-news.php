<?php

$emailNews = $_POST['emailNews'];
$emailEnviar = $_POST['emailEnviarNews'];

$message = "Desejo cadastrar meu e-mail: $emailNews";

$headers = 'From: Cadastrar E-mail <'.$emailNews.'>'.PHP_EOL.
'X-Mailer: PHP/'.phpversion();


// Send
mail($emailEnviar, 'Cadastro de e-mail', $message, $headers);
$redirect = "./../../../../";
header("location:$redirect"); 
?> 

