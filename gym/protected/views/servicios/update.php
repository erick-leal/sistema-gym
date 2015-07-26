<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	$model->SE_ID=>array('view','id'=>$model->SE_ID),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listado de Servicios', 'url'=>array('index')),
	array('label'=>'Crear Servicio', 'url'=>array('create')),
	array('label'=>'Ver Servicios', 'url'=>array('view', 'id'=>$model->SE_ID)),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Servicios <?php echo $model->SE_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>