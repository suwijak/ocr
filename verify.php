<?php
$access_token = '70eifKrc4Mi8yGYsCXRcXluGy8e//eQfSt8ptK+kpqwJAdV+oUhrH+27lfVdjm9xC+pBugPFRo7Whv3r0m8TVpsjgwbPsb2izmfWv8+PK908Mz3iQWTOLkMiwuiLmP2G6P5eFFc0hnRd3oijAWoPHgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/oauth2/v2.1/verify';
$headers = array('Content-Type: application/x-www-form-urlencoded' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER,  $access_token);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
