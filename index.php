<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $sql = new Hcode\DB\Sql();
    $results = $sql->select("SELECT * FROM tb_users");
    $response = json_encode($results);
    var_dump($response);
});

$app->run();