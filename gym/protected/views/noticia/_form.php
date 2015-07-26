<?php
/* @var $this NoticiaController */
/* @var $model Noticia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con<span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TITULAR'); ?>
		<?php echo $form->textField($model,'NO_TITULAR',array('size'=>30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NO_TITULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CUERPO'); ?>
		<?php echo $form->textArea($model,'NO__CUERPO',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'NO__CUERPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
					'model'=>$model,
					'attribute'=>'NO_FECHA',
					'language'=>'es',
					'options'=>array(
						'dateFormat'=>'yy-mm-dd'
						),
					)
			)  ?>
		<?php echo $form->error($model,'NO_FECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->