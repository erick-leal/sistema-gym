<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listado de Fichas', 'url'=>array('index')),
	array('label'=>'Gestionar Ficha', 'url'=>array('admin')),
);
?>

<h1>Crear Ficha</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>