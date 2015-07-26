<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	$model->FI_ID=>array('view','id'=>$model->FI_ID),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listado de Fichas', 'url'=>array('index')),
	array('label'=>'Crear Ficha', 'url'=>array('create')),
	array('label'=>'Ver Ficha', 'url'=>array('view', 'id'=>$model->FI_ID)),
	array('label'=>'Gestionar Ficha', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ficha Numero : <?php echo $model->FI_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>