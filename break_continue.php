<?php

$paises = array (
	'Argentina', 'Mexico', 'Colombia',
	'Peru', 'Chile','Guatemala', 'Venuezuela'
);




?>

</!DOCTYPE html>
<html>
<head>
	<title>Paises</title>
</head>
<body>
	<h1>Paises latinoamerianos</h1>
	<?php
	foreach ($paises as $pais ) {

	if ($pais == 'Chile'){
		break;
	}	
	echo $pais . '<br/>';

	}
	?>
</body>
</html>