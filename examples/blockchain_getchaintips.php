<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$chaintips = $client->blockchain()->getChainTips();

dump($chaintips);

exit;