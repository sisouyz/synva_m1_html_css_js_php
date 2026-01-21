<?php  
ini_set("display_errors",1);

//localhost
$host="localhost:3308";
$user="root";
$passwd="";
$bd="duweb25";

//alwaysdata
/*
$host="mysql-christoffel.alwaysdata.net";
$user="98509_duweb25";
$passwd="JiA8zFzA4bt537";
$bd="christoffel_duweb25";
*/

//$link=@mysqli_connect($host,$user,$passwd,$bd);

/*
if(!$link){
echo "Erreur: ".mysqli_connect_errno()."<br>";
echo "MSG: ".mysqli_connect_error()."<br>";	
}
*/

/*
if(mysqli_connect_errno()){
echo "Erreur: ".mysqli_connect_errno()."<br>";
echo "MSG: ".mysqli_connect_error()."<br>";	
}
*/


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
$link = mysqli_connect($host, $user, $passwd, $bd);
} catch (mysqli_sql_exception $e) { 
echo "MySQLi Error Code: " . $e->getCode() . "<br />";
echo "Exception Msg: " . $e->getMessage();
}

?>