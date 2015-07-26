<?php
/* @var $this ServiciosController */
/* @var $data Servicios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SE_ID), array('view', 'id'=>$data->SE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SE_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->SE_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SE_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->SE_DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SE_FOTO')); ?>:</b>
	<?php echo CHtml::encode($data->SE_FOTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SE_HORARIO')); ?>:</b>
	<?php echo CHtml::encode($data->SE_HORARIO); ?>
	<br />


</div>