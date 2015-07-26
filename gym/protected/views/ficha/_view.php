<?php
/* @var $this FichaController */
/* @var $data Ficha */

$a = CHtml::encode($data->US_ID);
$nombre = "$a"; 


     $link = mysql_connect("localhost", "root") or die ("ERROR AL CONECTAR"); 
    $db_select = mysql_select_db("TISW_GRUPO4") or die ("ERROR AL SELECCIONAR DB"); 
    
    $consulta = "SELECT * FROM usuario WHERE US_ID=$nombre"; 
    $q = mysql_query($consulta, $link) or die ("Error al consultar"); 
     
    $p = mysql_fetch_object($q);

?>

<div class="view">

<b><?php echo CHtml::encode($data->getAttributeLabel('FI_NOMBRE_USUARIO')); ?>:</b>
	<?php echo CHtml::link (CHtml::encode($p->US_NOMBRES) , array('view', 'id'=>$data->FI_ID)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FI_FECHA); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDOS_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->FI_APELLIDOS_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_NACIMIENTO')); ?>:</b>
	<?php echo CHtml::encode($data->FI_FECHA_NACIMIENTO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_SEXO')); ?>:</b>
	<?php echo CHtml::encode($data->FI_SEXO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_OCUPACION')); ?>:</b>
	<?php echo CHtml::encode($data->FI_OCUPACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_OBJETIVO')); ?>:</b>
	<?php echo CHtml::encode($data->FI_OBJETIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_PESO')); ?>:</b>
	<?php echo CHtml::encode($data->FI_PESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_ESTATURA')); ?>:</b>
	<?php echo CHtml::encode($data->FI_ESTATURA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_IMC')); ?>:</b>
	<?php echo CHtml::encode($data->FI_IMC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_MASA_MAGRA')); ?>:</b>
	<?php echo CHtml::encode($data->FI_MASA_MAGRA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_DIAGNOSTICO')); ?>:</b>
	<?php echo CHtml::encode($data->FI_DIAGNOSTICO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_PROGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->FI_PROGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FI_OBSERVACION')); ?>:</b>
	<?php echo CHtml::encode($data->FI_OBSERVACION); ?>
	<br />

	*/ ?>

</div>