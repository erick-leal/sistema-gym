<img class="ui center floated image" src="images/zumba_banner.jpg" width='1680' height='350'><BR>

<h1 class="m_11">Olvida el ejercicio... ¡Únete a la fiesta!</h1>
<BR>
<?php 
 $this->beginWidget('zii.widgets.jui.CJuiDialog',array(
  'id'=>'midialogo',

  // Opciones adicionales javascript
  'options'=>array(
   'title'=>'Horario',
   'modal'=> true ,
   'resizable'=>true,
   'height'=> 500,
   'width'=>800,
   'autoOpen'=>false,
  ),
 ));

   echo '<img class="ui right floated image" src="images/horario gym.jpg">';

  $this->endWidget('zii.widgets.jui.CJuiDialog');

  // Link que abre la ventana de diálogo
 echo CHtml::link('Revisa el horario !', '#', array(
    'onclick'=>'$("#midialogo").dialog("open"); return false;',
 ));
?>
	<BR> 
		<BR> 
<div class="ui segment">
  <img class="ui right floated image" src="images/zumba_logo.jpg" width='200' height='200'>
  <p><h2>Ideal para</h2> 
  Para todos, porque el tamaño no importa. Cada clase de Zumba
   está diseñada para juntarnos a bailar y sudar.<BR>
	<BR> 



<h2>Cómo funciona</h2>

El entrenamiento no tiene por qué ser tedioso: 
fusionamos movimientos de alta y baja intensidad 
para que disfrutes de una fiesta de acondicionamiento 
físico con intervalos para quemar calorías. 
Una vez que los ritmos latinos y de todo el mundo se apoderen
 de ti, entenderás por qué se suele decir que las 
 clases de Zumba" Fitness son un ejercicio disfrazado. 
 ¿Gran efectividad? Sí. ¿Máxima diversión? También.<BR>
 <BR>

  <img class="ui left floated image" src="images/zumba1.jpg" width='350' height='230'>
<p><h2>Beneficios</h2> 
Un entrenamiento completo que combina todos los elementos
 del acondicionamiento físico: trabajo cardiovascular y muscular, 
 equilibrio y flexibilidad, aumento de energía y muchísimos beneficios 
 increíbles que disfrutarás después de cada clase.
	</p>
</div>


