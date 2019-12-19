<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$check = $client->cashAccounts()->check('cgcardona', 122);

dump($check);

exit;