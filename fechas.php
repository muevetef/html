<?php

//imprimir la fecha
echo date('d-m-Y H:i:s') . '<br>';

//fecha del dia anterios
echo date('d-m-Y H:i:s', time()- 60*60*24). '<br>';

echo date('F j Y, H:i:s') . '<br>';

echo time() . '<br>';

$dateString = '2020-02-06 12:45:35';
$parsedDate = date_parse($dateString);

print_r($parsedDate). '<br>';

//Parse con formato
$dateString = 'February 8 2022 14:24';
$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);

print_r($parsedDate). '<br>';
echo '<hr>';

setlocale(LC_ALL, 'es_ES.UTF8');
date_default_timezone_set ('Europe/Madrid');

echo date('F j Y, H:i:s') . '<br>';
echo strftime("%A %d of %B %Y %r"). '<br>';
