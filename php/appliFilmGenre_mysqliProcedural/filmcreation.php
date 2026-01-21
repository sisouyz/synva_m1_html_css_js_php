<?php  




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
<input type="hidden" name="idFilm">
Titre film <input type="text" name="titreFilm" required ><br>

Genre <select size="1" name="idGenre" required>
	<option value="">-- Choix --</option>
<?php




?>
</select><br>
<button>Envoyer</button>

</body>
</html>