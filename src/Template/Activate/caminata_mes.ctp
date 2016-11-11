<h3>Personas que han caminado 3 dias seguidos por semana durante el mes <?=$mes ?></h3>
<?php 
	for($i=0;$i<count($usuariosCumplen);$i++){
?>
	<div><?= $usuariosCumplen[$i] ?></div>
<?php
}
?>