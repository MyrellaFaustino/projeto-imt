<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['plano'];
$message = $_POST['mensagem'];

$email_from = 'imtempresajr@gmail.com';

$email_subject = 'Novo form submetido';

$email_body = "Nome do usuário: $name.\n".
                "Email do usuário: $visitor_email.\n".
                    "Plano: $subject.\n".
                        "Mensagem do usuário: $message.\n";

$to = 'amynocauteadora@gmail.com'

$headers = "Do: $email_from \r\n";

$headers .= "Reenviar para: $visitor_email \r\n";

mail($to,$email,subject,$email_body,$headers);

header("location: contato.html")

?>