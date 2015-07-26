<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Listado de Fichas', 'url'=>array('index')),
	array('label'=>'Crear Ficha', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ficha-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Fichas</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ficha-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FI_ID',

		
		'FI_FECHA',
		'FI_NOMBRE_USUARIO',
		'FI_APELLIDOS_USUARIO',
		/*
		'FI_FECHA_NACIMIENTO',
		'FI_SEXO',
		'FI_OCUPACION',
		'FI_OBJETIVO',
		'FI_PESO',
		'FI_ESTATURA',
		'FI_IMC',
		'FI_MASA_MAGRA',
		'FI_DIAGNOSTICO',
		'FI_PROGRESO',
		'FI_OBSERVACION',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
