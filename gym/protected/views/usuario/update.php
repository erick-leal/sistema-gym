<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->US_ID=>array('view','id'=>$model->US_ID),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listado de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->US_ID)),
	array('label'=>'Administrador de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuario <?php echo $model->US_NOMBRES; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php  }?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>