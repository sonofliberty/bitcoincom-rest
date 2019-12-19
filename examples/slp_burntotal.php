<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$burntotal = $client->slp()->burnTotal('c7078a6c7400518a513a0bde1f4158cf740d08d3b5bfb19aa7b6657e2f4160de');
$burntotalBulk = $client->slp()->burnTotalBulk([
    'a5f972572ee1753e2fd2457dd61ce5f40fa2f8a30173d417e49feef7542c96a1',
    '5165dc531aad05d1149bb0f0d9b7bda99c73e2f05e314bcfb5b4bb9ca5e1af5e'
]);

dump($burntotal);
dump($burntotalBulk);

exit;