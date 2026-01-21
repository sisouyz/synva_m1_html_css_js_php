<?php


$a=26;
$b=5;

echo "$a modulus $b give a rest of ".($a%$b)."<br>";

$bigNum=1611167482567;

echo "$bigNum modulus 97 give a rest of ".($bigNum%97)."<br>";

$bigNumAsString='1611167482567';

echo "$bigNumAsString modulus 97 give a rest of ".bcmod($bigNumAsString,'97')."<br>";

?>