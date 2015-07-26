<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRES'); ?>
		<?php echo $form->textField($model,'US_NOMBRES',array('size'=>30,'maxlength'=>50,'placeholder'=>'Ej: Juan Eduardo')); ?>
		<?php echo $form->error($model,'US_NOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDO_PATERNO'); ?>
		<?php echo $form->textField($model,'US_APELLIDO_PATERNO',array('size'=>30,'maxlength'=>50,'placeholder'=>'Ej: Perez')); ?>
		<?php echo $form->error($model,'US_APELLIDO_PATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDO_MATERNO'); ?>
		<?php echo $form->textField($model,'US_APELLIDO_MATERNO',array('size'=>30,'maxlength'=>50,'placeholder'=>'Ej: Perez')); ?>
		<?php echo $form->error($model,'US_APELLIDO_MATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RUT'); ?>
		<?php 
		 $this->widget('CMaskedTextField', array(
  						'model' => $model,
  						'attribute' => 'US_RUT',
  						'mask' => '99.999.999-9',
  						'htmlOptions' => array('size' => 9)
 					)); ?>	(Si su dígito verificador es "k", reemplacelo por "0")	
 		<?php echo $form->error($model,'US_RUT'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'EDAD'); ?>
		<?php echo $form->textField($model,'US_EDAD',array('size'=>1)); ?> Años
		<?php echo $form->error($model,'US_EDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEFONO'); ?>
		<?php echo $form->textField($model,'US_TELEFONO'); ?>
		<?php echo $form->error($model,'US_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIRECCION'); ?>
		<?php echo $form->textArea($model,'US_DIRECCION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'US_DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CORREO'); ?>
		<?php echo $form->textField($model,'US_CORREO',array('size'=>30,'maxlength'=>50,'placeholder'=>'Ej: alumnos@ubiobio.cl')); ?>
		<?php echo $form->error($model,'US_CORREO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_INSCRIPCION'); ?>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
					'model'=>$model,
					'attribute'=>'US_FECHA_INS',
					'language'=>'es',
					'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						 'minDate' => '2015-05-22',      // minimum date
       					 'maxDate' => '2015-05-22',      // maximum date
						),
					)
			)  ?>		<?php echo $form->error($model,'US_FECHA_INS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->