<html>
<head>
	<title>Trabajo Practico Nº 1</title>
</head>
<body>
<?php  
include "persona.php";
$juan= new Persona("letteri",29124119,"juan","M" );
var_dump($juan);
echo $juan->getApellido();
?>
</body>
</html>