<?php

$meses = array (
	'Enero', 'Febrero', 'Marzo','Abril',
	'Mayo','Junio','Julio','Agosto',
	'Septiembre','Octubre','Noviembre','Diciembre'

);

$alejandro = array ('telefono' => 34522346 , 'edad' => 22 , 'apellido' => 'perez');

?>

</<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h1>Meses</h1>
	<ul>
		<?php
		//foreach ($meses as $mes ) {
		//	echo '<li>' .$mes. '</li>';
		//}
		
		foreach ($alejandro as $key => $value) {
			echo $key. ' '. $value. '<br />';
		}

		?>

	</ul>
</body>
</html>
