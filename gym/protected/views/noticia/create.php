<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listado de Noticias', 'url'=>array('index')),
	array('label'=>'Administrar Noticias', 'url'=>array('admin')),
);
?>

<h1>Crear Noticia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>