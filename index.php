<?php  
$entityManager = require __DIR__ . "/bootstrap.php";

$app = new \Slim\Slim();

$app->get("/", function() {
   echo 'Testando...';
});

$app->run();