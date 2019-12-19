<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$validate = $client->slp()->validateTxid('1cda254d0a995c713b7955298ed246822bee487458cd9747a91d9e81d9d28125');
$validateBulk = $client->slp()->validateTxidBulk([
    '1cda254d0a995c713b7955298ed246822bee487458cd9747a91d9e81d9d28125',
    '88b121101d71b73599dfc7d79eead599031912b2c48298bf5c1f37f4dd743ffa',
    'fb0eeaa501a6e1acb721669c62a3f70741f48ae0fd7f4b8e1d72088785c51952'
]);

dump($validate);
dump($validateBulk);

exit;