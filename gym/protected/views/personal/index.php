<?php
/* @var $this PersonalController */
/* @var $dataProvider CActiveDataProvider */

$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){

$this->breadcrumbs=array(
	'Personal',
);

$this->menu=array(
	array('label'=>'Crear Personal', 'url'=>array('create')),
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Personal</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


<?php  }  ?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>