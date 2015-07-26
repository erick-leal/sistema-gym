<?php
 $booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">



	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRES')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->US_NOMBRES), array('view', 'id'=>$data->US_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_PATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->US_APELLIDO_PATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_MATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->US_APELLIDO_MATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT')); ?>:</b>
	<?php echo CHtml::encode($data->US_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EDAD')); ?>:</b>
	<?php echo CHtml::encode($data->US_EDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->US_TELEFONO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('US_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->US_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('US_CORREO')); ?>:</b>
	<?php echo CHtml::encode($data->US_CORREO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('US_FECHA_INS')); ?>:</b>
	<?php echo CHtml::encode($data->US_FECHA_INS); ?>
	<br />

	*/ ?>

</div>

<?php  }?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>