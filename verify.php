<?php
echo 'v3';
$access_token = 'X8zC4jd3XJ4nESJ1cvmzvL17zFpgMKMt21/eRda35rWUZwfRuSTHVas/8PSYzwevEossSWUQa628N9dRZTyL6uwcl1knxpgfNSl2jzXV7WtTp+B462/AggG5OWPy5MeGPjZ/VF2t0Jei6dIKk/ai2gdB04t89/1O/w1cDnyilFU=';
$url = 'https://access.line.me/oauth2/v2.1/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;

