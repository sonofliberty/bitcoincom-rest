<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$reverselookup = $client->cashAccounts()->reverselookup('bitcoincash:qr4aadjrpu73d2wxwkxkcrt6gqxgu6a7usxfm96fst');

dump($reverselookup);

exit;