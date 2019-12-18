<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$count = $client->blockchain()->getBlockCount();

dump($count);

exit;