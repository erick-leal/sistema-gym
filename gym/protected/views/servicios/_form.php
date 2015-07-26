<?php
/* @var $this ServiciosController */
/* @var $model Servicios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'servicios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'SE_NOMBRE',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SE_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'SE_DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SE_DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FOTO'); ?>
		<?php echo $form->fileField($model,'SE_FOTO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SE_FOTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HORARIO'); ?>
		<?php echo $form->textArea($model,'SE_HORARIO',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SE_HORARIO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->