<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$difficulty = $client->blockchain()->getDifficulty();

dump($difficulty);

exit;