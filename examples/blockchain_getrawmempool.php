<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$mempool = $client->blockchain()->getRawMempool();

dump($mempool);

exit;