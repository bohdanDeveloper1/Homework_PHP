<?php

require_once 'vendor/autoload.php';

use Apsl\Http\Request;
use Apsl\Http\Response;


$request = new Request();

$response = new Response();
$response->addHeader(Response::HEADER_CONTENT_TYPE, 'application/json');
