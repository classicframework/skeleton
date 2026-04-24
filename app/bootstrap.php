<?php

define('APP_PATH', __DIR__);

require __DIR__ . '/../autoload.php';

$app = new classicframework\core\App();
$app->run();