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
    "payload": "NoshpJYLmvVat19ZueGmIry4ituz5Kszg4iily4xXQQhkpTcVvhhylsTwApW9An1Gy4UsejaIIUyWDgjQb97zSCxVjBO9buhedUGvilDcZ0oK6Nu/UU3ml3hNubZY1W5EuKVJ6z6tvNZeiVHtFi2PMs82e86oA89JTlH1QflyL8KPIJtcMg1uXachi6+k5whSFDyyhk6M3iJyuxxc9jyRW/kWT5QcauWY+TzARDLtzl6tXOnz5FmS80CtoHMHVnvu0Z4kzuVPQt2WRn4iizdENVJVP+4N9k5pqzXzNSJmtH5+/1C+W0eepnOmxE3DIwaPCrNpg+Fw8k8epFEp580031SXpPtMThNZ2M5VJk6ItwAUSrFT5UXthQqggJdJDoWeTbtZB03uo7MVsSyCLLYoivrM9aJZP/L",
    "type":"decrypt"
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
