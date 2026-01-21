<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Errors and Warnings</title>
</head>
<body>
<?php
echo "This is a parse error (missing semicolon ending line)"
echo "each instruction must end with a semicolon!";
?>	
</body>
</html>
