<?php
require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/credentials.php';

$connection = new \Teamleader\Connection();
$connection->setClientId( $clientId );
$connection->setClientSecret( $clientSecret );

$client = new \Teamleader\Client( $connection );

$paymentTerms = $client->paymentTerm()->get();

var_dump( $paymentTerms );
