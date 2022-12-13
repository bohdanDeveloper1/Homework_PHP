<?php
//після натискання (Log in button), код переходить сюди, до action="/secret.php"
require_once 'vendor/autoload.php';

use Apsl\Http\Request;
use Apsl\Session\Session;



$session = new Session();

$request = new Request();
if ($request->isMethod(Request::METHOD_POST)) //якщо Request::METHOD_POST то ...
{
//передаємо 'login' в Ассоциативный массив, содержащий переменные сессии, которые доступны для текущего скрипта. 
    $login = $request->getValue('login'); 
    $pass = $request->getValue('pass');


      // TODO: store in session, display success message, display error message if wrong credentials

    if ($login === 'admin' && $pass === 'admin') // if user will enter correct data
{
    $success = 'U entered correct data! Success';
    echo   $success;
    // Log out
        include 'Log_out.html.php'; //код виконується в Log_out.html.php
}
    else // if user will enter uncorrect data
{
     //тут повернутись на першу сторінку та заново Log in    
    $problem = 'u inputed uncorrect data, try again';
        echo $problem;
    $session->destroy();
        include 'try_again.html.php';  //код виконується в try_again.html.php  
}

}
