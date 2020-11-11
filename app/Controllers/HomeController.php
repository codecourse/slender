<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class HomeController extends Controller
{
    /**
     * Render the home page
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     * @return void
     */
    public function index(Request $request, Response $response, array $args)
    {
        return $this->c->get('view')->render($response, 'home/index.twig', [
            'appName' => $this->c->get('settings')['app']['name'],
        ]);
    }
}
