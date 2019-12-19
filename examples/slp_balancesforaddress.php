<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$balance = $client->slp()->balancesForAddress('simpleledger:qz9tzs6d5097ejpg279rg0rnlhz546q4fsnck9wh5m');
$balanceBulk = $client->slp()->balancesForAddressBulk([
    'simpleledger:qz9tzs6d5097ejpg279rg0rnlhz546q4fsnck9wh5m',
    'simpleledger:qqapjzaaex66ve4xj7kwykmckv2t73jjfqhzwy53zq'
]);

dump($balance);
dump($balanceBulk);

exit;