<?php
header('Content-type: text/plain'); 

$id = $_GET["id"];
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://zeus.rcti.plus/video/api/v1/live-event/$id/url?appierid=6c32ce16-cf3e-4e8f-ad57-f0aa48cb91e0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Accept: application/json, text/plain, */*';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ2aWQiOjAsInRva2VuIjoiM2ZhNWVhN2NiY2FjNGFhNyIsInBsIjoibXdlYiIsImRldmljZV9pZCI6IjY5NDIwIn0.SvfazyygWtUSSI-ERUrF_1gYEDFbwIwy5Xl3SnoL7as';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Origin: https://m.rctiplus.com';
$headers[] = 'Referer: https://m.rctiplus.com/';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Site: cross-site';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 12; CPH2235) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36';
$headers[] = 'Apikey: jFFhGYfZzrEgaPIGmFOVttQzCNbvqJHb';
$headers[] = 'Sec-Ch-Ua: \"Not:A-Brand\";v=\"99\", \"Chromium\";v=\"112\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'Sec-Ch-Ua-Platform: \"Android\"';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$result = json_decode($result, true);


$c = $result['data']['conviva_params']['5']['value'];


header("Location: $c");



