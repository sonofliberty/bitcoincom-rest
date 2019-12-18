<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$blockheader = $client->blockchain()->getBlockHeader('000000000000000005e14d3f9fdfb70745308706615cfa9edca4f4558332b201');
$blockheaderHex = $client->blockchain()->getBlockHeaderHex('000000000000000005e14d3f9fdfb70745308706615cfa9edca4f4558332b201');

$blockHeaderBulk = $client->blockchain()->getBlockHeaderBulk(['000000000000000005e14d3f9fdfb70745308706615cfa9edca4f4558332b201', '00000000000000000568f0a96bf4348847bc84e455cbfec389f27311037a20f3']);
$blockHeaderBulkHex = $client->blockchain()->getBlockHeaderBulkHex(['000000000000000005e14d3f9fdfb70745308706615cfa9edca4f4558332b201', '00000000000000000568f0a96bf4348847bc84e455cbfec389f27311037a20f3']);

dump($blockheader);
dump($blockheaderHex);

dump($blockHeaderBulk);
dump($blockHeaderBulkHex);

exit;