<?php
$access_token = 'WVx3/J6GszDkkn+mxzkWtEKyXE+8onO3I5v0GyNenyGvRqtMwYJ+9jMyP1hFpx1VAICfyFxSb5reQ5cUtcg3DvHWhDMFmVU3dcp8MVR3cTmUfKc2O/VK/cEdrqOs7ASS0KqFPvLdTN8yozW/grUSqwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
