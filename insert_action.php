<?php
// Conectando, seleccionando la base de datos
$link = @mysql_connect('localhost', 'root', 'root')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
@mysql_select_db('contactos') or die('No se pudo seleccionar la base de datos');

//variables de recogida de datos formulario

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$apto=$_POST['apto'];

// Realizar una insercion
$query = "INSERT INTO `agenda`( `nombre`, `telefono`,`apto`) VALUES ('".$nombre."' , '".$telefono."', '".$apto."' )";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());




// Cerrar la conexi�n
mysql_close($link);


header('Location: index.php');
?>
