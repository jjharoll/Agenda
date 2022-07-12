<?php

require_once 'modelo/ModeloAgenda.php';

$result = getContactos();


?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
</head>

<table>

<thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Telefono</th>
	  <th>Apartamento</th>
    </tr>
  </thead>

	<tbody>
	
	<?php foreach ($result as $contacto) { ?>
    

	
	<tr>
		<td><?php echo $contacto['id'];?></td>
		<td><?php echo $contacto['nombre'];?></td>
		<td><?php echo $contacto['telefono'];?></td>
		<td><?php echo $contacto['apto'];?></td>
		<td>
			<a href="delete.php?id=<?php echo $contacto['id'];?>" >borrar</a>
		</td>
		
		<td>
			<a href="modificar.php?id=<?php echo $contacto['id'];?>">Modificar</a>
		</td>
	</tr> 
	</tbody>
	<?php } //Final del foreach  ?>
</table>

</html>