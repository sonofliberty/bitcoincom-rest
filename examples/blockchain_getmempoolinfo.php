<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$info = $client->blockchain()->getMempoolInfo();

dump($info);

exit;