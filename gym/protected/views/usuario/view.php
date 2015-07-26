<?php
 $booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){

/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->US_ID,
);

$this->menu=array(
	array('label'=>'Listado de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->US_ID)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->US_ID),'confirm'=>'Esta seguro que quiere eliminar este usuario ?')),
	array('label'=>'Administrador de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Ver Usuario <?php echo $model->US_NOMBRES; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'US_NOMBRES',
		'US_APELLIDO_PATERNO',
		'US_APELLIDO_MATERNO',
		'US_RUT',
		'US_EDAD',
		'US_TELEFONO',
		'US_DIRECCION',
		'US_CORREO',
		'US_FECHA_INS',
	),
)); ?>

<?php  }?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>