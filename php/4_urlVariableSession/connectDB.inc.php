<?php
$host="localhost";//defaul 3306, check PHP MyAdmin for port number of MySQL and MariaDB (3308)
$user="root";
$passwd="";
$db="";//set BD name


//PHP version 8
//try ... catch... localhost
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//N7
try {
$link = mysqli_connect($host, $user, $passwd, $bd);
mysqli_set_charset($link,"utf8");
} catch (Exception $e) { 
echo "Case localhost, database : $bd, Error Code: " . $e->getCode() . "<br />";
echo "Exception Msg: " . $e->getMessage();
exit();
}


/*
//PHP version 7
//@ to prevent a warning display
$link=@mysqli_connect($host,$user,$passwd,$db);

//if mysqli_connect_errno
if(mysqli_connect_errno()){
	echo "Error No :".mysqli_connect_errno()." , Msg : ".mysqli_connect_error()."<br>";
	exit();
}

//encoding mysqli_set_charset
mysqli_set_charset($link,'utf8');
*/


?>