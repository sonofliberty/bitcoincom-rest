<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$details = $client->address()->details('bitcoincash:qzs02v05l7qs5s24srqju498qu55dwuj0cx5ehjm2c');
$bulkDetails = $client->address()->bulkDetails(['bitcoincash:qzs02v05l7qs5s24srqju498qu55dwuj0cx5ehjm2c', 'bitcoincash:qrehqueqhw629p6e57994436w730t4rzasnly00ht0']);

dump($details);
dump($bulkDetails);

exit;