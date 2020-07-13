<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class BarController{
    public function getAll($request, $response, $args){
        $response->getBody()->write('Hello World!');
        return $response;
    }
}