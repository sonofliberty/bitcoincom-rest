<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$tokens = $client->slp()->list([
    '0c7bbb381466cc043f4687eac651a1317733d77fa1fb0cb3a3d616b11024a839',
    '152428f15949ebbd848f4004c40d0f6aa33db8329b4ab4df6cba5fd96f8c56e8'
]);

dump($tokens);

exit;