<?php
/* @var $this ServiciosController */
/* @var $model Servicios */

$this->breadcrumbs=array(
	'Servicios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listado de Servicios', 'url'=>array('index')),
	array('label'=>'Administrar Servicios', 'url'=>array('admin')),
);
?>

<h1>Crear Servicios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>