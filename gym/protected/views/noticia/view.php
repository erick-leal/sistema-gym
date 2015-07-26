<?php
/* @var $this NoticiaController */
/* @var $model Noticia */

$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->NO_ID,
);

$this->menu=array(
	array('label'=>'Listado de Noticias', 'url'=>array('index')),
	array('label'=>'Crear Noticia', 'url'=>array('create')),
	array('label'=>'Actualizar Noticia', 'url'=>array('update', 'id'=>$model->NO_ID)),
	array('label'=>'Eliminar Noticia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NO_ID),'confirm'=>'Esta seguro que quiere eliminar este noticia?')),
	array('label'=>'Administrar Noticias', 'url'=>array('admin')),
);
?>

<h1>Ver Noticia #<?php echo $model->NO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NO_ID',
		'NO_TITULAR',
		'NO__CUERPO',
		'NO_FECHA',
	),
)); ?>
