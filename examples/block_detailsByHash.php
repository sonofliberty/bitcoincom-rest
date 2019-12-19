<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$details = $client->block()->detailsByHash('000000000000000005e14d3f9fdfb70745308706615cfa9edca4f4558332b201');
$bulkDetails = $client->block()->detailsByHashBulk(['000000000000000005e14d3f9fdfb70745308706615cfa9edca4f4558332b201']);

dump($details);
dump($bulkDetails);

exit;