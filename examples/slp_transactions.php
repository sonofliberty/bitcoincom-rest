<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$txns = $client->slp()->transactions('495322b37d6b2eae81f045eda612b95870a0c2b6069c58f70cf8ef4e6a9fd43a', 'simpleledger:qrhvcy5xlegs858fjqf8ssl6a4f7wpstaqnt0wauwu');

dump($txns);

exit;