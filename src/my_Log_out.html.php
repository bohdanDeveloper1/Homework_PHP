<?php
//після натискання (Log out button), код переходить сюди, до action="/secret.php"
require_once 'vendor/autoload.php';

use Apsl\Session\Session;
use Apsl\Http\Request;

$session = new Session();
$session->destroy();
echo 'session was destroied', "\n";
echo 'if u want to Log in, click button below';


include 'my_new_Log_in.html.php';