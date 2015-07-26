<?php

$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	

	<div class="row">
		<?php echo $form->label($model,'NOMBRES'); ?>
		<?php echo $form->textField($model,'PE_NOMBRES',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDO_PATERNO'); ?>
		<?php echo $form->textField($model,'PE_APELLIDO_PATERNO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDO_MATERNO'); ?>
		<?php echo $form->textField($model,'PE_APELLIDO_MATERNO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model,'FUNCION'); ?>
		<?php echo $form->textField($model,'PE_FUNCION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_INSCRIPCION'); ?>
		<?php echo $form->textField($model,'PE_FECHA_INS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->


<?php  }  ?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>