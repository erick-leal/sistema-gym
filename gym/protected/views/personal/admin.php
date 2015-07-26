<?php
/* @var $this PersonalController */
/* @var $model Personal */

$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){


$this->breadcrumbs=array(
	'Personal'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Personal', 'url'=>array('index')),
	array('label'=>'Crear Personal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Personal</h1>



<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'PE_ID',
		'PE_NOMBRES',
		'PE_APELLIDO_PATERNO',
		'PE_APELLIDO_MATERNO',
		'PE_CV',
		'PE_FUNCION',
		/*
		'PE_FECHA_INS',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php  }  ?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>