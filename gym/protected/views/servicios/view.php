<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	$model->SE_ID,
);

$this->menu=array(
	array('label'=>'Listado de Servicios', 'url'=>array('index')),
	array('label'=>'Crear Servicio', 'url'=>array('create')),
	array('label'=>'Actualizar Servicio', 'url'=>array('update', 'id'=>$model->SE_ID)),
	array('label'=>'Eliminar Servicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SE_ID),'confirm'=>'Esta seguro que quiere eliminar este servicio?')),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<h1>Ver Servicio #<?php echo $model->SE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SE_ID',
		'PE_ID',
		'SE_NOMBRE',
		'SE_DESCRIPCION',
		'SE_FOTO',
		'SE_HORARIO',
	),
)); ?>
