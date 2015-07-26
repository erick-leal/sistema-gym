<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
 $booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){



 

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Administrador de Usuarios', 'url'=>array('admin')),
);

?>

<h1>Crear Usuario</h1>




<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<?php  }?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>