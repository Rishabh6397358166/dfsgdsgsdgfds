<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-out.shop-se.in/merchant/secure/api/v1/encryptAndDecrypt',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "secretKey":"h48Ivw+fmWyDU1qL299rXlRVb5XULVvdi35IUGgLGn8=",
    "ivKey":"dOjsjPo+lGRQ7aUVcgYj1g==",
    "payload": "{\\"amount\\": 1.00, \\"mobile\\": \\"8861650714\\", \\"orderId\\": \\"SCULPORD-000024\\", \\"email\\": \\"rohan.deshmukh@getshopse.com\\",\\"consumerName\\": \\"Rohan Deshmukh\\", \\"returnUrl\\": \\"https://www.getshopse.com/\\", \\"webhookUrl\\": \\"https://staging.getshopse.com/web/webhook/\\"}",
    "type":"encrypt"
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic MDE1NzI6ZTkxZWFmN2YtYTkwNC00NDlkLWEzMmItOTA4ZWYyMjJmYTgx',
    'x-api-key: MY2uUdJrdyLLcpvKmdjaj0MYFFnRvhgMmYDAbFY6',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
