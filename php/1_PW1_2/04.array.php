<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How to PHP</title>
</head>
<body>
<?php
//indexed array
//auto indexes 0, 1, 2, ...
$grades=array(12,13,9,15);
print_r($grades);
echo "<br>";
//associative array
$averageScoresPerSubject=array("Maths"=>12,"Physics"=>14,"Web Programming"=>16);
print_r($averageScoresPerSubject);
echo "<br>";
//multi-dimensional array
$scoresPerSubject=array("Maths"=>array(13,11,12),"Physics"=>array(14,12,16));
print_r($scoresPerSubject);

//average mark distinction
echo "<br>";
$averageMarkDistinction=array('HD'=>"High Distinction","DI"=>'Distinction',"CR"=>"Credit",'PS'=>'Pass',"FA"=>"Fail");
print_r($averageMarkDistinction);

$averageMarkDistinctionMarkRange=array();
$averageMarkDistinctionMarkRange['HD']=array('award'=>"High Distinction",'min'=>85,'max'=>100);
$averageMarkDistinctionMarkRange['DI']=array('award'=>"Distinction",'min'=>75,'max'=>84);
$averageMarkDistinctionMarkRange['CR']=array('award'=>"Credit",'min'=>65,'max'=>74);
$averageMarkDistinctionMarkRange['PS']=array('award'=>"Pass",'min'=>50,'max'=>64);
$averageMarkDistinctionMarkRange['FA']=array('award'=>"Fail",'min'=>0,'max'=>49);
echo "<hr>";
print_r($averageMarkDistinctionMarkRange);
echo "<br>";
echo "HD result code correspond to ".$averageMarkDistinctionMarkRange['HD']['award']." award, with a mark ranging from ".$averageMarkDistinctionMarkRange['HD']['min']." to ".$averageMarkDistinctionMarkRange['HD']['max']."<br>";
?>

<?php


?>

</body>
</html>

