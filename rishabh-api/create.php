<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-out.shop-se.in/merchant/secure/api/v2/paymentLinks',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "encryptedRequest": "yCfmEtcAt3OzsInHPpdj/BzNktzgrewxHQR3iHDdyyG9U/V2TnYY7S3Ap9V7CG7X0TPA/bgZBcDN+MhP6VZ1CwEggGxA6Unazv3G8J91P39yzSpsP1dEa295+31U0Z5Pkw89y/eW8C+1TQKpBQbQ9+1ooLAIpV1CF42U5kaFT6hUiNnMKCgE1NMxjvF74aHYO5FpOjBv4xI=",
    "secretKeyType": ""
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic Ogg',
    'x-api-key: MY2uUdJrdyLLcpvKmdjaj0MYFFnRvhgMmYDAbFY6'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
