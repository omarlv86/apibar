<?php namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\BaseController;

class BarController extends BaseController{
    public function getAll($request, $response, $args){
        $pdo = $configuraciones = $this->container->get('db');

        $query = $pdo->query("SELECT * FROM bar");

        $response->getBody()->write(json_encode($query->fetchAll()));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}