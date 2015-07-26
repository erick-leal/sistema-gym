<?php
/* @var $this FichaController */
/* @var $model Ficha */

$a = CHtml::encode($model->US_ID);
$nombre = "$a"; 

    $consulta=Yii::app()->db->createCommand("SELECT *
	FROM usuario
	where us_id=$nombre")->queryRow();

	 $nombreusuario=Yii::app()->db->createCommand("SELECT us_nombres
	FROM usuario
	where us_id=$nombre")->queryScalar();



$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	$model->FI_ID,
);

$this->menu=array(
	array('label'=>'Listado de Fichas', 'url'=>array('index')),
	array('label'=>'Crear Ficha', 'url'=>array('create')),
	array('label'=>'Editar Ficha', 'url'=>array('update', 'id'=>$model->FI_ID)),
	array('label'=>'Eliminar Ficha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FI_ID),'confirm'=>'Esta seguro que desea eliminar esta ficha?')),
	array('label'=>'Gestionar Ficha', 'url'=>array('admin')),
);
?>

<h1>Ficha de <?php echo $nombreusuario; "\n";    ?></h1>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(			
		'FI_FECHA_NACIMIENTO',
		'FI_SEXO',
		'FI_OCUPACION',
		'FI_OBJETIVO',
		'FI_PESO',
		'FI_ESTATURA',
		
	),
)); ?>

<br><br>

<?php 

$a2 = CHtml::encode($model->PE_ID);
$nombre2 = "$a2"; 

$p=Yii::app()->db->createCommand("SELECT * 
	FROM personal
	where pe_id=$nombre2")->queryRow();
 
 $np=Yii::app()->db->createCommand("SELECT pe_nombres
	FROM personal
	where pe_id=$nombre2")->queryScalar();
 ?>

<h3></h3>

<h3>Estado Nutrcional evaluado por <?php echo $np; ?></h3>


<?php  



//$ka=$model->FI_ID;
$estatura=$model->FI_ESTATURA;
$peso=$model->FI_PESO;
$imc=($peso/($estatura*$estatura))*10000;

$fecha=date("Y-m-d");
$fecha_na=$model->FI_FECHA_NACIMIENTO;
$edad=$fecha-$fecha_na;

$sexo=$model->FI_SEXO;

if ($sexo=='Masculino') 

		$multiplicador=1;
	else 
		$multiplicador=0;

$grasa= (1.20*$imc) + (0.23*$edad)-(10.8*$multiplicador)-(5.4);


echo "<font color='blue'>Tu Indice de Masa Corporal (IMC) es : </font>"; echo round($imc,2);

?><br><br><?php  

 echo "<font color='blue'>Tu Grasa Corporal es de </font>"; echo round($grasa,2); echo " %";

?><br><br><?php  

if ($imc<16) {
	echo " Ud tiene diagnosticada una Delgadez severa";
	?><br><br><?php  echo "Su Progreso es del 50%";	
	$this->widget('zii.widgets.jui.CJuiProgressBar', array(
        'value'=>50, //value in percent
        'htmlOptions'=>array(
                'style'=>'height:20px;'
        ),
	));
}

if ( $imc>=16 && $imc<16.99) {
	echo " Ud tiene diagnosticada una Delgadez moderada";
	?><br><br><?php  echo "Su Progreso es del 60%";
	$this->widget('zii.widgets.jui.CJuiProgressBar', array(
        'value'=>60, //value in percent
        'htmlOptions'=>array(
                'style'=>'height:20px;'
        ),
	));
}

if ( $imc>=17 && $imc<18.49) {
	echo " Ud tiene diagnosticada una Delgadez moderada";
	?><br><br><?php  echo "Su Progreso es del 70%";
	$this->widget('zii.widgets.jui.CJuiProgressBar', array(
        'value'=>70, //value in percent
        'htmlOptions'=>array(
                'style'=>'height:20px;'
        ),
	)); 
}
	
if ( $imc>=18.50 && $imc<24.99) {
	echo  "<font color='green'>Ud tiene diagnosticado un peso NORMAL </font>";
	?><br><br><?php  echo "Su Progreso es del 80%";
	$this->widget('zii.widgets.jui.CJuiProgressBar', array(
        'value'=>80, //value in percent
        'htmlOptions'=>array(
                'style'=>'height:20px;'
        ),
	));
	}

if ( $imc>=25 && $imc<29.99) {
		echo "<font color='red'>Ud tiene diagnosticado un SOBREPESO </font>";
		?><br><br><?php  echo "Su Progreso es del 70%";
	$this->widget('zii.widgets.jui.CJuiProgressBar', array(
        'value'=>70, //value in percent
        'htmlOptions'=>array(
                'style'=>'height:20px;'
        ),
	));
}


if ( $imc>=30 && $imc<34.99) {
	echo "<font color='red'>Ud tiene diagnosticado OBESIDAD LEVE </font>";
	?><br><br><?php  echo "Su Progreso es del 60%";
	$this->widget('zii.widgets.jui.CJuiProgressBar', array(
        'value'=>60, //value in percent
        'htmlOptions'=>array(
                'style'=>'height:20px;'
        ),
	));
}

if ( $imc>=35 && $imc<39.99) {
	echo "<font color='red'>Ud tiene diagnosticado OBESIDAD MEDIA </font>";
	?><br><br><?php  echo "Su Progreso es del 50%";
	$this->widget('zii.widgets.jui.CJuiProgressBar', array(
        'value'=>50, //value in percent
        'htmlOptions'=>array(
                'style'=>'height:20px;'
        ),
	));
}

if ( $imc>=40 ) {
	echo "<font color='red'>Ud tiene diagnosticado OBESIDAD MORBIDA </font>";
	?><br><br><?php  echo "Su Progreso es del 40%";
	$this->widget('zii.widgets.jui.CJuiProgressBar', array(
        'value'=>40, //value in percent
        'htmlOptions'=>array(
                'style'=>'height:20px;'
        ),
	));
}


		
	 ?>



	



