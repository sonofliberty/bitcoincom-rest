<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$balance = $client->slp()->balance('simpleledger:qz9tzs6d5097ejpg279rg0rnlhz546q4fsnck9wh5m', '1cda254d0a995c713b7955298ed246822bee487458cd9747a91d9e81d9d28125');

dump($balance);

exit;