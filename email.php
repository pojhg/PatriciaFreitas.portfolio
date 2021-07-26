<?php

if (isset($_POST["email"]){ && !empty($_POST["email"])


    $nome=addslashes($_POST['nome']);
    $sobrenome=addslashes($_POST['sobrenome']);
    $email=addslashes($_POST['email']);
    $comentario= addslashes($_POST['comentario']);
    
    $to="patifilipa@live.com.pt";
    $subject="Patricia Freitas";
    $body="Nome: ". $nome. "\r\n".
        "Sobrenome: ". $sobrenome. "\r\n".
         "Email: ". $email. "\r\n".
         "Comentaio: ". $comentario.;
    $header="From:patifilipa@live.com.pt". "\r\n".
            "Reply-To:"$email "\e\n".
            "X=Mailer:PHP/"phpversion();
    
if (mail($to,$subject,$body,$header)){

    echo("E-Mail enviado com sucesso!");
}
else {

    echo("Erro ao enviar o E-Mail");
}         
   