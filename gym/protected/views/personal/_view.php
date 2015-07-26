<?php



$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){
/* @var $this PersonalController */
/* @var $data Personal */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRES')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PE_NOMBRES), array('view', 'id'=>$data->PE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_PATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->PE_APELLIDO_PATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_MATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->PE_APELLIDO_MATERNO); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('FUNCION')); ?>:</b>
	<?php echo CHtml::encode($data->PE_FUNCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_INSCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->PE_FECHA_INS); ?>
	<br />


</div>


<?php  }  ?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>