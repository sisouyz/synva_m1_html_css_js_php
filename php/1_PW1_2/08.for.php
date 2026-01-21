<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to PHP</title>
</head>
<body>
<?php
//for loop as a counter
for($i=0;$i<10;$i++){
	echo "$i <br>";
}
echo "<br>";

//multiplication
$operand=5;
for($multiplier=1;$multiplier<=10;$multiplier++){
echo "$operand x $multiplier = ".($operand*$multiplier)."<br>";
}
echo "<hr>";

//multiplication table



//foreach
$averageScoresPerSubject=array("Maths"=>12,"Physics"=>14,"Web Programming"=>16);
foreach ($averageScoresPerSubject as $keySubject => $valueScore) {
	echo "Subject $keySubject , average score : $valueScore<br>";
}

echo "<hr>";
echo "while loop N1 (i having an initial value $i greater than counterMax)!<br>";
//while, may never be executed
$counterMax=5;
while($i<=$counterMax){
	echo "$i ";
	$i++;
}
echo "<br>";
echo "do ... while loop (i having an initial value $i > counterMax)!<br>";
//do while, at least running one time
$counterMax=5;
do {
	echo "$i ";
	$i++;
} while($i<=$counterMax);
echo "<br>";
//$i still have an intial value from previous for loop !
echo "while loop N2 (i set to 0)<br>";
$i=0;
$counterMax=5;
while($i<=$counterMax){
	echo "$i ";
	$i++;
}
echo "<br>";
?>


</body>
</html>

