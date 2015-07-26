<?php
/* @var $this FichaController */
/* @var $model Ficha */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'FI_ID'); ?>
		<?php echo $form->textField($model,'FI_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PE_ID'); ?>
		<?php echo $form->textField($model,'PE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'US_ID'); ?>
		<?php echo $form->textField($model,'US_ID'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'FECHA'); ?>
		<?php echo $form->textField($model,'FI_FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE_USUARIO'); ?>
		<?php echo $form->textField($model,'FI_NOMBRE_USUARIO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDOS_USUARIO'); ?>
		<?php echo $form->textField($model,'FI_APELLIDOS_USUARIO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_NACIMIENTO'); ?>
		<?php echo $form->textField($model,'FI_FECHA_NACIMIENTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEXO'); ?>
		<?php echo $form->textField($model,'FI_SEXO'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'FI_OCUPACION'); ?>
		<?php echo $form->textField($model,'FI_OCUPACION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FI_OBJETIVO'); ?>
		<?php echo $form->textField($model,'FI_OBJETIVO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FI_PESO'); ?>
		<?php echo $form->textField($model,'FI_PESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FI_ESTATURA'); ?>
		<?php echo $form->textField($model,'FI_ESTATURA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FI_IMC'); ?>
		<?php echo $form->textField($model,'FI_IMC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FI_MASA_MAGRA'); ?>
		<?php echo $form->textField($model,'FI_MASA_MAGRA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FI_DIAGNOSTICO'); ?>
		<?php echo $form->textField($model,'FI_DIAGNOSTICO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FI_PROGRESO'); ?>
		<?php echo $form->textField($model,'FI_PROGRESO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FI_OBSERVACION'); ?>
		<?php echo $form->textArea($model,'FI_OBSERVACION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>-->

<?php $this->endWidget(); ?>

</div><!-- search-form -->