
<h3>Buscar persona que más metros recorrió en el mes</h3>
<label for="Mes">Seleccione un mes:</label>
<?php
	echo $this->form->create('Post', array('url'=> array('controller' => 'Activate','action' => 'ganadorMes')));
	echo $this->Form->input('Mes', array(
    	'type'    => 'select',
    	'options' => array(1 => "ENERO",2 => "FEBRERO",3 => "MARZO",4 => "ABRIL",5 => "MAYO",6 => "JUNIO",7 => "JULIO",8 => "AGOSTO"
    	,9 => "SEPTIEMBRE",10 => "OCTUBRE",11 => "NOVIEMBRE",12 => "DICIEMBRE"),
    	'empty'   => false
	));
	echo $this->Form->button('Buscar ganador del mes');
	echo $this->Form->end();
?>

<h3>Buscar persona que más metros recorrió en un día</h3>
<label for="date">Seleccione un día:</label>
<?php
	echo $this->form->create('Post', array('url'=> array('controller' => 'Activate','action' => 'ganadorDia')));
	echo $this->Form->input('date', array('type' => 'text'));
	echo $this->Form->button('Buscar ganador del día');
	echo $this->Form->end();
?>


<h3>Buscar persona que camino 3 días seguidos todas las semanas de un mes</h3>
<label for="date">Seleccione un Mes:</label>
<?php
	echo $this->form->create('Post', array('url'=> array('controller' => 'Activate','action' => 'caminataMes')));
	echo $this->Form->input('Mes2', array(
    	'type'    => 'select',
    	'options' => array(1 => "ENERO",2 => "FEBRERO",3 => "MARZO",4 => "ABRIL",5 => "MAYO",6 => "JUNIO",7 => "JULIO",8 => "AGOSTO"
    	,9 => "SEPTIEMBRE",10 => "OCTUBRE",11 => "NOVIEMBRE",12 => "DICIEMBRE"),
    	'empty'   => false
	));
	echo $this->Form->button('Buscar ganador del del Mes');
	echo $this->Form->end();
?>







<script type="text/javascript">
		$( document ).ready(function() {	    	
	    	$('#date').attr('type', 'date');
	    	
		});

</script>



