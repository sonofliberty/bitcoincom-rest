<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$balances = $client->slp()->balancesForToken('df808a41672a0a0ae6475b44f272a107bc9961b90f29dc918d71301f24fe92fb');
$balancesBulk = $client->slp()->balancesForTokenBulk(['df808a41672a0a0ae6475b44f272a107bc9961b90f29dc918d71301f24fe92fb']);

dump($balances);
dump($balancesBulk);

exit;