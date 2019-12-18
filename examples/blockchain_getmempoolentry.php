<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$entry = $client->blockchain()->getMempoolEntry('4637de7fbf65fe93f7976220ff5d702bc5d33ba1f3c5e7d6dfc6a5da451861e2');
$entryBulk = $client->blockchain()->getMempoolEntryBulk(['4637de7fbf65fe93f7976220ff5d702bc5d33ba1f3c5e7d6dfc6a5da451861e2']);

dump($entry);
dump($entryBulk);

exit;