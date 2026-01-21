<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to PHP</title>
</head>
<body>
<?php
//modulus and big numbers
echo (100%97)."<br>";
echo (1611167482567%97)."<br>";
echo bcmod('1611167482567', 97)."<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
//incrementing, decrementing
$a=5;
echo "$a++ : ".($a++)."<br>";
echo $a."<br>";
echo "<hr>";
$a=5;
echo "++$a : ".(++$a)."<br>";
echo $a."<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
//concatenation operator
$surname="Christoffel";
$firstname="Eric";
$fullName=$surname.' '.$firstname;
echo $fullName."<br>";
echo "<hr>";



?>

<?php


?>

</body>
</html>

