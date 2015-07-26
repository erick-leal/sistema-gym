<?php
/* @var $this UsuarioController */

$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){
  	/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listado de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de Usuarios</h1>



<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'US_ID',
		'US_NOMBRES',
		'US_APELLIDO_PATERNO',
		'US_APELLIDO_MATERNO',
		'US_RUT',
		'US_EDAD',
		/*
		'US_TELEFONO',
		'US_DIRECCION',
		'US_CORREO',
		'US_FECHA_INS',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


<?php  }?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>