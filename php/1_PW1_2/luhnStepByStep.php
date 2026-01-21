<?php

$cardNumber=5240374834723122;
$cardNumberTransformed=$cardNumber;
$digitAtPlace=array();
$divider=10;
for($i=1;$i<=15;$i++){
$theLastDigit=$cardNumberTransformed % $divider;
$cardNumberTransformed=($cardNumberTransformed-$theLastDigit)/$divider;
$digitAtPlace[$i]=$theLastDigit;
}
$digitAtPlace[]=$cardNumberTransformed;

//preview
echo "cardNumber : $cardNumber<br>";
echo "<pre>";
print_r($digitAtPlace);
echo "</pre>";

$digitDoubleIfEvenPosition=array();
for($i=1;$i<=16;$i++){
	if(($i % 2)==0) {
		$digitDoubleIfEvenPosition[$i]=$digitAtPlace[$i]*2;
	} else {
		$digitDoubleIfEvenPosition[$i]=$digitAtPlace[$i];
	}
}

//preview
echo "<pre>";
print_r($digitDoubleIfEvenPosition);
echo "</pre>";

$digitDoubleIfEvenPositionAndSumValueIfGreaterThan9=array();
for($i=1;$i<=16;$i++){
//e.g. if 16 => 1+6=7 , or just substract 9 16-9=7
	if($digitDoubleIfEvenPosition[$i]>=10){
		$digitDoubleIfEvenPositionAndSumValueIfGreaterThan9[$i]=$digitDoubleIfEvenPosition[$i]-9;
	} else {
		$digitDoubleIfEvenPositionAndSumValueIfGreaterThan9[$i]=$digitDoubleIfEvenPosition[$i];
	}
}

//preview
echo "<pre>";
print_r($digitDoubleIfEvenPositionAndSumValueIfGreaterThan9);
echo "</pre>";

//sum of all digits
$theSum=0;
for($i=1;$i<=16;$i++){
	$theSum+=$digitDoubleIfEvenPositionAndSumValueIfGreaterThan9[$i];
}

//
echo "sum $theSum<br>";




//final check 
echo "$cardNumber is a".( ( ($theSum % 10) == 0  ) ? " valid":"n invalid" )." number";
?>