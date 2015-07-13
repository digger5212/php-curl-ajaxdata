<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.willmyphonework.net/wp-admin/admin-ajax.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=models_ajax&brandId=3709');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, curlHeaders());

$output = curl_exec($ch);
curl_close($ch);
echo $output;

/*
curl -d "action=models_ajax&brandId=3709" http://www.willmyphonework.net/wp-admin/admin-ajax.php
*/

function curlHeaders() {
    $headers = array();

    $headers[] = 'Host: www.willmyphonework.net';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0';
    $headers[] = 'Accept: text/html, */*; q=0.01';
    $headers[] = 'Accept-Language: en-US,en;q=0.5';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = 'Referer: http://www.willmyphonework.net';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';

    return $headers;
}

