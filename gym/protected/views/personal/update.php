<?php
/* @var $this PersonalController */
/* @var $model Personal */

$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->PE_ID=>array('view','id'=>$model->PE_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'View Personal', 'url'=>array('view', 'id'=>$model->PE_ID)),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>

<h1>Update Personal <?php echo $model->PE_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


<?php  }  ?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>