<?php
/* @var $this PersonalController */
/* @var $model Personal */

$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){

$this->breadcrumbs=array(
	'Personal'=>array('index'),
	$model->PE_ID,
);

$this->menu=array(
	array('label'=>'Listado Personal', 'url'=>array('index')),
	array('label'=>'Crear Personal', 'url'=>array('create')),
	array('label'=>'Actualizar Personal', 'url'=>array('update', 'id'=>$model->PE_ID)),
	array('label'=>'Eliminar Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PE_ID),'confirm'=>'Esta seguro que quiere eliminar este personal?')),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Ver Personal <?php echo $model->PE_NOMBRES; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'PE_NOMBRES',
		'PE_APELLIDO_PATERNO',
		
		
		'PE_FUNCION',
		'PE_FECHA_INS',
	),
)); ?>

<?php  }  ?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>
