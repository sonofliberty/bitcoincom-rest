<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$lookup = $client->cashAccounts()->lookup('cgcardona', 122, '6383276713');

dump($lookup);

exit;