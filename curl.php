<?php
$url = 'https://jsonplaceholder.typicode.com/users';
/*$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$users = curl_exec($resource);


$resCode = curl_getinfo($resource, CURLINFO_HTTP_CODE );
echo $resCode; */

$user = [
    'name' => 'Alexa',
    'username' => 'echo',
    'email' => 'alexa@amazon.com'
];


$req = curl_init($url);
curl_setopt_array($req,[
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-type: application/json')
]);

$result = curl_exec($req);
curl_close($req); 

var_dump($result);