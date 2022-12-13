<?php

namespace Apsl\Inf03\Webdev;

use Apsl\Html\Template;
use Apsl\Http\Request;
use Apsl\Http\Response;
use Apsl\Session\Session;


class Application
{
    public function run(): void
    {
        $request = new Request(); //не використовуємо

        $response = new Response();
        $response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');

        $session = new Session();//не використовуємо

        $template = new Template('templates/index.html.php');
        $out = $template->render([ //встановлюємо напис (заголовок сторінки)
            'title' => 'Hello!'
        ]);

        // TODO: hide login form when user is logged in, display log out which will destroy session

        $response->setBody($out); //передаємо  $out = $template->render

        $response->send();
    }
}
