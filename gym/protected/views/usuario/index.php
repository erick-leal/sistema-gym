<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */
$booleanResult = Yii::app()->user->isSuperAdmin;

  if($booleanResult){


$this->breadcrumbs=array(
  'Usuarios',
);

$this->menu=array(
  array('label'=>'Crear Usuario', 'url'=>array('create')),
  array('label'=>'Administrador de Usuarios', 'url'=>array('admin')),
);
?>

<h1>Usuarios</h1>


<br>
<br>
<?php $this->widget('zii.widgets.CListView', array(
  'dataProvider'=>$dataProvider,
  'itemView'=>'_view',
)); ?>

<?php  }?>
<br>

<?php  if(!$booleanResult) {?>

<h1>Usted no tiene permisos para acceder a esta página  ..!.. </h1>

<?php  }?>
<br>