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

$digitDoubleIfEvenPosition=array();
for($i=1;$i<=16;$i++){
	if(($i % 2)==0) {
		$digitDoubleIfEvenPosition[$i]=$digitAtPlace[$i]*2;
	} else {
		$digitDoubleIfEvenPosition[$i]=$digitAtPlace[$i];
	}
}

$digitDoubleIfEvenPositionAndSumValueIfGreaterThan9=array();
for($i=1;$i<=16;$i++){
//e.g. if 16 => 1+6=7 , or just substract 9 16-9=7
	if($digitDoubleIfEvenPosition[$i]>=10){
		$digitDoubleIfEvenPositionAndSumValueIfGreaterThan9[$i]=$digitDoubleIfEvenPosition[$i]-9;
	} else {
		$digitDoubleIfEvenPositionAndSumValueIfGreaterThan9[$i]=$digitDoubleIfEvenPosition[$i];
	}
}

//sum of all digits
$theSum=0;
for($i=1;$i<=16;$i++){
	$theSum+=$digitDoubleIfEvenPositionAndSumValueIfGreaterThan9[$i];
}

//final check 
echo "$cardNumber is a".( ( ($theSum % 10) == 0  ) ? " valid":"n invalid" )." number";
?>