<?php

// include __DIR__ . '/vendor/autoload.php';


// include __DIR__ . './api/random-animal.phtml';
$rawApiResponse = file_get_contents('https://dog.ceo/api/breeds/image/random');
$apiResponse = json_decode($rawApiResponse, true);
var_export($apiResponse);

echo $apiResponse["message"];
