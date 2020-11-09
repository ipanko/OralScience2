<?php


if(isset($_POST['your-email']) && !empty($_POST['your-email'])){

$nome = addslashes($_POST['your-name']);
$cidade = addslashes($_POST['cidade']);
$estado = addslashes($_POST['estado']);
$email = addslashes($_POST['your-email']);

$to = "dudumaia3622@gmail.com";
$subjet = "Formulário - OralScience";
$body = "Nome: ".$nome. "\r\n".
        "Cidade: ".$cidade. "\r\n".
        "Estado: ".$estado. "\r\n".
        "Email: ".$email;
$header = "From:eduardo@oralscience.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();


if(mail($to,$subjet,$body,$header)){

    echo("Email enviado com sucesso :D");

}else{
    echo("Deu azar em fião, por algum motivo misterioso seu formulário não foi enviado.");
}

}

?>