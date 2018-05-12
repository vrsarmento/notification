<?php 
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.gmail.com", "test@gmail.com", "test@123", "tls", "587", "test@gmail.com", "Teste");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "vrsarmento@gmail.com", "Victor Rocha", "vrsarmento@hotmail.com", "Victor Sarmento");
