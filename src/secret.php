<?php

require_once 'vendor/autoload.php';

use Apsl\Session\Session;
use Apsl\Http\Request;


$session = new Session();

$request = new Request();
if ($request->isMethod(Request::METHOD_POST)) {
    $login = $request->getValue('login');
    $pass = $request->getValue('pass');

    var_dump('Here!');
    var_dump($login, $pass);

    // TODO: store in session, display success message, display error message if wrong credentials
}
