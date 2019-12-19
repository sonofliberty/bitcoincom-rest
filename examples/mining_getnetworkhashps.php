<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$hashps = $client->mining()->getNetworkHashps(120, -1);

dump($hashps);

exit;