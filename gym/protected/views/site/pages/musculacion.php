
<BR>
<BR>


<img class="ui center floated image" src="images/gim3.jpg">

<h1 class="m_11">¡Alcanza tu meta más rápido con el servicio de personal training de HYPERTROPHIA!</h1>
</table>
   	<div id="content" style="padding-bottom:15px;">
	<p>Evoluciona. Lleva tu mente y tu cuerpo aún más allá, 
con el apoyo de un servicio de Personal Training único, 
creado para que logres tus metas en forma segura y en el menor tiempo posible.
 Y experimentes un cambio real. <BR>¡Comprúebalo!</p>
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
<h2>¿Por qué un Personal Trainer?</h2> 





<div class="ui segment">
  <p>Nuestros Personal Trainers están para ayudarte a ALCANZAR TU META EN EL MENOR TIEMPO POSIBLE.<BR>
  <BR>
• En función a tus objetivos, diseña un plan de acondicionamiento físico personalizado y adaptado a tus necesidades.<BR>
<BR>
• Te enseña a realizar los ejercicios que más requieres de manera precisa, con el peso adecuado, 
número apropiado de repeticiones y tiempos de descanso entre series, insistiendo en la respiración y 
postura de modo que puedas lograr el mejor rendimiento con cada movimiento y evitar lesiones.<BR>
<BR>
• Te asegura un progreso constante sesión a sesión.<BR>
<BR>
• Monitorea tu alimentación y te propone un plan nutricional eficaz.<BR>
<BR>
• Te mantiene motivado e incentiva a asistir al gimnasio.<BR>
<BR>
• Verifica tus avances<BR>
<BR>
Con esta ayuda, podrás experimentar una verdadera 
EVOLUCIÓN DE CUERPO Y MENTE, pues verás mejoras físicas y 
sentirás un cambio sicológico positivo, sintiendo más energía, 
más motivación para hacer las cosas y mayor autoestima y seguridad 
para enfrentar los desafíos día a día.
  </p>
</div>





