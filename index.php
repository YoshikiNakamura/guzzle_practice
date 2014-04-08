<?php
echo 'working..';
require 'vendor/autoload.php';

echo 'requre ok';

use GuzzleHttp\Client;

echo 'use ok!';

$client = new Client();

echo 'new ok!';

print_r(array(1,2,3,4,5));

print_r($client);

$response = $client->get('http://localhost/api.php');

echo '<pre>';
print_r($response);
echo '</pre>';

