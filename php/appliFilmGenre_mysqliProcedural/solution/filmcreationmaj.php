<?php  
include("connectDB.inc.php");
include("securedData.inc.php");

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

if(array_key_exists('idFilm', $_POST) and is_numeric($_POST['idFilm'])){
$idFilm=intval($_POST['idFilm']);
$titreFilm=securite_bdd($_POST['titreFilm']);
$idGenre=securite_bdd($_POST['idGenre']);
} else {
	exit();
}


if($idFilm==0){//cas nouveau
$query="INSERT INTO film (`idFilm`, `titreFilm`, `idGenre`, `valideFilm`) VALUES (null,\"$titreFilm\",$idGenre,1)";
$result=mysqli_query($link,$query) or die($query.' '.mysqli_enable_reads_from_master($link));
} else {//cas update
$query="UPDATE film SET titreFilm=\"$titreFilm\", idGenre=$idGenre WHERE idFilm=$idFilm";
$result=mysqli_query($link,$query) or die($query.' '.mysqli_enable_reads_from_master($link));

}

header("Location: filmaccueil.php");
?>