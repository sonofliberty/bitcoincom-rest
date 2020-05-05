# bitcoincom-rest

Easy to use PHP library for interacting with [rest.bitcoin.com](https://rest.bitcoin.com).

## Installation

`composer require sonofliberty/bitcoincom-rest`

## Get started

```php
use SonOfLiberty\BitcoinComRest\Client;

$client = new Client();

// get address details
$addressDetails = $client->address()->details('bitcoincash:qzs02v05l7qs5s24srqju498qu55dwuj0cx5ehjm2c');

// get slp token balances
$balances = $client->slp()->balancesForAddress('simpleledger:qz9tzs6d5097ejpg279rg0rnlhz546q4fsnck9wh5m');

// check 'examples' folder for more example code
```

## Donate
* BCH: bitcoincash:qpaz7xtdu5wh3wlcq3n79ze87ng5d4vkvqmkl9r206
* SLP: simpleledger:qqapjzaaex66ve4xj7kwykmckv2t73jjfqhzwy53zq