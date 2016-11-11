<?php
	if ($cantidadMayor==0) {
?>
	<div>No hay resultados para ese mes</div>
<?php		
	}else{
?>

<?php foreach ($ganador as $ganador): ?>
		<div>El ganador del mes es: <?= h($ganador->nombre)." ".h($ganador->app)." con una cantidad de: ". $this->Number->format(0.79*$cantidadMayor)." m." ?><div>
<?php endforeach; 
	}
?>