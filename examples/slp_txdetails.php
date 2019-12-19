<?php

use SonOfLiberty\BitcoinComRest\Client;

require __DIR__ . "/../vendor/autoload.php";

$client = new Client();

$txdetails = $client->slp()->txDetails('8ab4ac5dea3f9024e3954ee5b61452955d659a34561f79ef62ac44e133d0980e');

dump($txdetails);

exit;