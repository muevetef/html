<?php
$nombre = "Mario";
$nombreCompleto = 'Hola, soy' . $nombre;
$nombreCompleto2 = "Hola, soy $nombre";

echo $nombreCompleto2 . '<br>';

//Funciones de strings
$string = "     Hello World     ";

echo "1 - " . strlen($string) . '<br>' ;
echo "2 - " . trim($string) . '<br>' ;
echo "3 - " . ltrim($string) . '<br>' ;
echo "4 - " . rtrim($string) . '<br>' ;
echo "5 - " . str_word_count($string) . '<br>' ;
echo "6 - " . strrev($string) . '<br>' ;
echo "7 - " . strtoupper($string) . '<br>' ;
echo "8 - " . strtolower($string) . '<br>' ;
echo "9 - " . ucfirst('hello') . '<br>' ;
echo "10 - " . lcfirst('HELLO') . '<br>' ;
echo "11 - " . ucwords('hello world') . '<br>' ;
echo "12 - " . strpos($string, 'World') . '<br>' ;
echo "13 - " . stripos($string, 'world') . '<br>' ;
echo "14 - " . mb_substr($string,8) . '<br>' ;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' ;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' ;

$longText = "
    Hola, soy un 
    texto largo
    multilinea...
";

echo $longText . '<br>';
echo nl2br($longText);

$orig = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($orig);

$b = html_entity_decode($a);

echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

echo $b; // I'll "walk" the <b>dog</b> now

$nuevo = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $nuevo; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

//Longitud de un string
$fruta = "Limón";
echo '<br>';

echo strlen($fruta);//Devuelve la longitud en bytes

echo '<br>';
echo mb_strlen($fruta);//Devuelve la longitud en carácteres