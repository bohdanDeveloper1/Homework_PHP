<?php

require_once 'vendor/autoload.php';


use \Apsl\Inf03\Webdev\Message;


$msg = new Message(from: 'Janusz', to: 'Grażyna');
$msg->setText('Cześć! Jak się masz?');

echo $msg;
