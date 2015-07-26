<?php
/* @var $this NoticiaController */
/* @var $data Noticia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NO_ID), array('view', 'id'=>$data->NO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITULAR')); ?>:</b>
	<?php echo CHtml::encode($data->NO_TITULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CUERPO')); ?>:</b>
	<?php echo CHtml::encode($data->NO__CUERPO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->NO_FECHA); ?>
	<br />


</div>