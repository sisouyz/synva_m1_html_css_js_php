<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to PHP</title>
</head>
<body>
<?php
//amont, discount, discount_rate

//if else else if
if(defined('M_PI_2')) echo "&Pi;/2 = ".M_PI_2."<br>";

if(defined('M_PI_4')) 
	echo "&Pi;/4 = ".M_PI_4."<br>";

if(defined('M_PI_3')) 
	echo "&Pi;/3 = ".constant('M_PI_3')."<br>";

if(defined('M_PI_3')) {
	echo "&Pi;/3 = ".constant('M_PI_3')."<br>";
} else {
	echo "&Pi;/3 doesn't exists<br>";
}

$a=51;
if($a<50){
	echo "$a < 50<br>";
} else if($a==50){
	echo "$a = 50<br>";
} else {
	echo "$a < 50<br>";	
}
echo "<hr>";

//alternative new spaceship operator
//https://ideone.com/jeqDJo
//echo $a <=> 50;
//echo "<hr>";

//ternary operator ?
$a=51;
echo ($a<=50) ? "$a is less than or equal to 50":"$a is greater than 50";
echo "<hr>";



//switch case
$award="DI";
switch($award){
	case "HD":
	echo "Hight Distinction";
	break;
	case "DI":
	echo "Distinction";
	break;	
	case "CR":
	echo "Credit";
	break;
	case "PS":
	echo "Pass";
	break;
	case "FA":
	echo "Fail";
	break;
}
echo "<hr>";


//https://ideone.com/jeqDJo
$a=48;
$b=67;
switch($a<=>$b){
	case 1:
	echo "greater than";
	break;
	case 0:
	echo "equal";
	break;
	case -1:
	echo "less than";
	break;	
}


//Null Coalescing Operator PHP7
/*
echo "&Pi;/3 ".( constant('M_PI_3')  ??  "doesn't exist"   )."<br>";
echo "&Pi;/4 ".( constant('M_PI_4')  ??  "doesn't exist"   )."<br>";
*/
//alternative isset() see chapter 2

//https://ideone.com/oz36M2

echo "Pi/3 ".( constant('M_PI_3')  ??  "doesn't exist"   )."\n";
echo "Pi/4 ".( constant('M_PI_4')  ??  "doesn't exist"   )."\n";

?>

<?php


?>

</body>
</html>

