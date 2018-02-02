<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->post('/login', function (Request $req,  Response $res, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton './login' route");
    $mail = $req->getParsedBody()['mail'];//checks both _GET and _POST [NOT PSR-7 Compliant]
    $pwd = $req->getParsedBody()['pwd']; //checks _POST  [IS PSR-7 compliant]
    $isCorrect = ($mail === "hajer@gmail.com" && $pwd === "aaa");

    return $this->renderer->render($res, 'login.phtml', $args);
});