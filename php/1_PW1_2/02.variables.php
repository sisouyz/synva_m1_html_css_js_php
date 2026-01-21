<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to PHP</title>
</head>
<body>
<?php
//variable and assigned value using 
// assignment operator =
//string value delimited by "   " or '   '
$customer_name="Christoffel";//string type
$_type='client';
$customerID=1657;//integer type
$title1="Mr";
$title2="Mister";
//variable name written in camel case
$purchaseInProgress=true;//boolean
//$message="Name $customer_name, Status $_type";
$message="Name $customer_name, customer ID : $customerID";
var_dump($message);
var_dump($customerID);
?>


</body>
</html>

