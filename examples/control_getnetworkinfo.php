<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$networkinfo = $client->control()->getNetworkInfo();

dump($networkinfo);

exit;