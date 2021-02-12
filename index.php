<?php

$app_id = "pdnBCoyeEgCMLiKkbjceqkCGedd4Cepr";
$app_secret = "01a5997b1ff87e492bc436e41a083ac6ab4c94e429fc35c851ec575f1c3d1d2a";
$rewards_token = "8wmMhxCamXWZIFvMkyQ2WA==";
$address = "9068159926";
$promo = "LE200";

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/rewards/v1/transactions/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{ \"outboundRewardRequest\" : { \"app_id\" : \"".$app_id."\", \"app_secret\" : \"".$app_secret."\", \"rewards_token\" : \"".$rewards_token."\", \"address\" : \"".$address."\", \"promo\" : \"".$promo."\" } }",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Host: devapi.globelabs.com.ph"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>