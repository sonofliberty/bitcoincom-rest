<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$converted = $client->slp()->convert('simpleledger:qqapjzaaex66ve4xj7kwykmckv2t73jjfqhzwy53zq');
$convertedBulk = $client->slp()->convertBulk([
    'simpleledger:qqapjzaaex66ve4xj7kwykmckv2t73jjfqhzwy53zq'
]);

dump($converted);
dump($convertedBulk);

exit;