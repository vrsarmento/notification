<?php 
require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$newEmail = new Email(2, "host.email.com", "test@email.com", "password", "tls/ssl", "Port", "test@email.com", "From Name");
$newEmail->sendMail("Subject", "E-mail body", "test@email.com", "Reply Name", "test@email.com", "Address Name");
