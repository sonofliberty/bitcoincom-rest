<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$validate = $client->util()->validateAddress('bitcoincash:qzs02v05l7qs5s24srqju498qu55dwuj0cx5ehjm2c');
$validateBulk = $client->util()->validateAddressBulk([
    'bitcoincash:qzs02v05l7qs5s24srqju498qu55dwuj0cx5ehjm2c',
    'bitcoincash:qrehqueqhw629p6e57994436w730t4rzasnly00ht0'
]);

dump($validate);
dump($validateBulk);

exit;