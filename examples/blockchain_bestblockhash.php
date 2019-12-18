<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$hash = $client->blockchain()->getBestBlockHash();

dump($hash);

exit;