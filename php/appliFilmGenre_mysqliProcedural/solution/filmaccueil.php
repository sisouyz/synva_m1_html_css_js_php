<?php  
include("connectDB.inc.php");

$query="SELECT film.idFilm, film.titreFilm, genre.genre  
FROM `film` 
JOIN genre USING (idGenre) 
WHERE film.valideFilm=1";
$result=mysqli_query($link,$query) or die($query.'<br>'.mysqli_error($link));


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<style>
	body {font-family: Verdana;font-size: 12pt;}
	table {table-layout: auto;width: 800px;border:1px solid black;border-collapse: collapse;}
	th, td {border:1px solid black;}
</style>
</head>
<body>
<p><a href="filmcreation.php?idFilm=0">Création Film</a></p>

<table>
<caption>Nb enregistrements : <?php echo mysqli_num_rows($result); ?></caption>
<thead><tr><th>Titre Film</th><th>Genre</th><th>Edit</th><th>Suppr.</th></thead>

<tbody>
<?php
while($var=mysqli_fetch_assoc($result)){
//var_dump($var);
extract($var);
echo "<tr>";
echo "<td>$titreFilm</td>";
//echo "<td>".$var['genre']."</td>";
echo "<td>{$var['genre']}</td>";

echo "<td><a href=\"filmcreation.php?idFilm=$idFilm\">[ Edit ]</a></td>";
echo "<td>[ Supp ]</td>";

echo "</tr>";
}//fin while

?>
</tbody>
</table>	

</body>
</html>