<?php

namespace Apsl\Inf03\Webdev;

use Apsl\Http\Request;
use Apsl\Http\Response;


class Application
{
    public function run()
    {
        $request = new Request();

        $response = new Response();
        $response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');
        $response->setBody('Hello from OOP world!');

        $response->send();
    }
}
