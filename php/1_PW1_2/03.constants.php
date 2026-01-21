<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to PHP</title>
</head>
<body>
<?php
//define function
define('SURNAME',"Christoffel");
//keyword const
const FIRSTNAME='Eric';
define("_VAT_RATE",0.2);

var_dump(SURNAME);
var_dump(FIRSTNAME).
var_dump(_VAT_RATE);

//amount and VAT calculation

?>

<?php
echo "&pi; M_PI : ".M_PI."<br>";
echo "&pi;/2 M_PI_2 : ".M_PI_2."<br>";
echo "M_2_PI cste ".( (defined('M_2_PI')) ? 'yes exists, is equal to '.constant('M_2_PI') :'no' )."<br>";

//defined() and constant() 
//dynamic access
$constantName='M_PI';
echo constant($constantName)."<hr>";
for($i=1;$i<=4;$i++){
//	echo constant($constantName.'_'.$i)."<br>";
if(defined($constantName.'_'.$i)){
echo "&pi;/$i = ".constant($constantName.'_'.$i)."<br>";
} else {
echo "&pi;/$i doesn't exist<br>";
}
}
?>

</body>
</html>

