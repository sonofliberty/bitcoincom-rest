<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$details = $client->address()->details('bitcoincash:qpaz7xtdu5wh3wlcq3n79ze87ng5d4vkvqmkl9r206');
$bulkDetails = $client->address()->bulkDetails(['bitcoincash:qzs02v05l7qs5s24srqju498qu55dwuj0cx5ehjm2c', 'bitcoincash:qrehqueqhw629p6e57994436w730t4rzasnly00ht0']);

dump($details);
dump($bulkDetails);

exit;