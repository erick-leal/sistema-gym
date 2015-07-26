<?php
/* @var $this FichaController */
/* @var $model Ficha */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ficha-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<br>

	<P>1. DATOS EVALUADOR. </P>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Instructor'); ?>
		<?php echo $form->dropDownList($model,'PE_ID',CHtml::listData(Personal::model()->findAll(), 'PE_ID','PE_NOMBRES'), array('empty'=>'Selecciona un Instructor')); ?>
		<?php echo $form->error($model,'PE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
					'model'=>$model,
					'attribute'=>'FI_FECHA',
					'language'=>'es',
					'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						 'minDate' => '2015-05-22',      // minimum date
       					 'maxDate' => '2015-05-22',      // maximum date
						),
					)
			)  ?>
		<?php echo $form->error($model,'FI_FECHA'); ?>
	</div>
	<BR>

	<P>2. DATOS DEL PACIENTE. </P>

		<div class="row">
		<?php echo $form->labelEx($model,'USUARIO'); ?>
		<?php echo $form->dropDownList($model,'US_ID',CHtml::listData(Usuario::model()->findAll(), 'US_ID','US_NOMBRES'), array('empty'=>'Selecciona un Usuario')); ?>
		<?php echo $form->error($model,'US_ID'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_NACIMIENTO'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
				array(
					'model'=>$model,
					'attribute'=>'FI_FECHA_NACIMIENTO',
					'language'=>'es',
					'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						'changeMonth'=>true,
        				'changeYear'=>true,
        				'yearRange'=>'1950:1997',
        				
						),
					)
			)  ?>
		<?php echo $form->error($model,'FI_FECHA_NACIMIENTO'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'SEXO'); ?>
		<?php echo $form->dropDownList($model,'FI_SEXO',array('Masculino'=>'Hombre','Femenino'=>'Mujer')); ?>
		<?php echo $form->error($model,'FI_SEXO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OCUPACION'); ?>
		<?php echo $form->textField($model,'FI_OCUPACION',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'FI_OCUPACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OBJETIVO'); ?>
		<?php echo $form->textField($model,'FI_OBJETIVO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FI_OBJETIVO'); ?>
	</div>

	<BR>

	<P>3. EVALUACION DEL ESTADO NUTRICIONAL. </P>

	<div class="row">
		<?php echo $form->labelEx($model,'PESO'); ?>
		<?php echo $form->textField($model,'FI_PESO',array('size'=>10,'maxlength'=>10)); ?> (kg)
		<?php echo $form->error($model,'FI_PESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTATURA'); ?>
		<?php echo $form->textField($model,'FI_ESTATURA',array('size'=>10,'maxlength'=>10)); ?> (cm)
		<?php echo $form->error($model,'FI_ESTATURA'); ?>
	</div>

	


	<br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
