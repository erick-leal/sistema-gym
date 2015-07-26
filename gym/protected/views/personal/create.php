<?php
/* @var $this PersonalController */
/* @var $model Personal */

$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){

$this->breadcrumbs=array(
	'Personal'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Personal', 'url'=>array('index')),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Crear Personal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


<?php  }  ?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>