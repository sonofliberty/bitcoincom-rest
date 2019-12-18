<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$tx = $client->transaction()->details('fe28050b93faea61fa88c4c630f0e1f0a1c24d0082dd0e10d369e13212128f33');
$txBulk = $client->transaction()->detailsBulk([
    'a5f972572ee1753e2fd2457dd61ce5f40fa2f8a30173d417e49feef7542c96a1',
    '5165dc531aad05d1149bb0f0d9b7bda99c73e2f05e314bcfb5b4bb9ca5e1af5e'
]);

dump($tx);
dump($txBulk);

exit;