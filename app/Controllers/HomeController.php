<?php

namespace App\Controllers;

use App\Controllers\Controller;
use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class HomeController extends Controller
{
    public function index(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'home/index.twig', [
            'appName' => $this->settings['app']['name'],
        ]);
    }
}
