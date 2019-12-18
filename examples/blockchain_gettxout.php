<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$txout = $client->blockchain()->getTxOut('fe28050b93faea61fa88c4c630f0e1f0a1c24d0082dd0e10d369e13212128f33', 0);

dump($txout);

exit;