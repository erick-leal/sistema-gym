<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'personal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRES'); ?>
		<?php echo $form->textField($model,'PE_NOMBRES',array('size'=>30,'maxlength'=>50,'placeholder'=>'Ej: Juan Eduardo')); ?>
		<?php echo $form->error($model,'PE_NOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDOS'); ?>
		<?php echo $form->textField($model,'PE_APELLIDO_PATERNO',array('size'=>30,'maxlength'=>50,'placeholder'=>'Ej: Perez')); ?>
		<?php echo $form->error($model,'PE_APELLIDO_PATERNO'); ?>
	</div>



	

	<div class="row">
		<?php echo $form->labelEx($model,'CARGO'); ?>
		<?php echo $form->dropDownList($model,'PE_FUNCION',array('Personal Trainer'=>'Personal Trainer','Zumba'=>'Zumba','Body Combat'=>'Body Combat','Baile Entretenido'=>'Baile Entretenido','Otro'=>'Otro')); ?>
		<?php echo $form->error($model,'PE_FUNCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_INSCRIPCION'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
					'model'=>$model,
					'attribute'=>'PE_FECHA_INS',
					'language'=>'es',
					'options'=>array(
						'dateFormat'=>'yy-mm-dd'
						),
					)
			)  ?>
		<?php echo $form->error($model,'PE_FECHA_INS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->