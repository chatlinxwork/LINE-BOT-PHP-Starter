<?php
$access_token = 'OkNy7fO5AxG93+josk0X4Jr0kj8wsq0NadpeJC+JjzRdMZXvAUp7gNUCxLwghYXZ1VIYMp8m8yzh1CYVrx9QGOPag6lIQ+2BZojD3WHbEtMyL+u42eTKAUjR18r27aCzkDn2buQALXdYgTlXG9nqDAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
