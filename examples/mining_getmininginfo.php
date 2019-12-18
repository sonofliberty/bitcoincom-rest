<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$mininginfo = $client->mining()->getMiningInfo();

dump($mininginfo);

exit;