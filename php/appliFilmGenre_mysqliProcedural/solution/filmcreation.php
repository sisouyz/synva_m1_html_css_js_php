<?php  
include("connectDB.inc.php");

if(array_key_exists('idFilm', $_GET) and is_numeric($_GET['idFilm'])){
$idFilm=intval($_GET['idFilm']);
} else {
	exit();
}


$query="SELECT * FROM genre";
$result=mysqli_query($link,$query) or die($query.' '.mysqli_error($link));
$listeGenre=array();
while($var=mysqli_fetch_assoc($result)){
	$listeGenre[$var['idGenre']]=$var['genre'];
}

if($idFilm>0){
$query="SELECT * FROM film WHERE idFilm=$idFilm";	
$result=mysqli_query($link,$query) or die($query.' '.mysqli_error($link));
$var=mysqli_fetch_assoc($result);
extract($var);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
	body {font-family: Verdana;font-size: 12pt;}

</style>
</head>
<body>
<h1>Fiche Film</h1>
<form action="filmcreationmaj.php" method="post">	
<input type="hidden" name="idFilm" value="<?php echo $idFilm; ?>">
Titre film <input type="text" name="titreFilm" required <?php if($idFilm>0) echo 'value="'.htmlentities($titreFilm).'"';   ?>><br>

Genre <select size="1" name="idGenre" required>
	<option value="">-- Choix --</option>
<?php
foreach ($listeGenre as $keyIdGenre => $valueGenre) {
echo "<option value=\"$keyIdGenre\"";
if($idFilm>0 and isset($idGenre) and $idGenre==$keyIdGenre) echo " selected";
echo ">$valueGenre</option>\n";
}

?>
</select><br>
<button>Envoyer</button>

</body>
</html>