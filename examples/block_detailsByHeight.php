<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$details = $client->block()->detailsByHeight(0);
#$bulkDetails = $client->block()->bulkDetailsByHeight([0, 1]);

dump($details);
#dump($bulkDetails);

exit;