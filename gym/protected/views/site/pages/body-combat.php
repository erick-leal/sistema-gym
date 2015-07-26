<img class="ui center floated image" src="images/Body_Combat_banner.jpg">
<h1 class="m_11">Un entrenamiento diferente</h1>
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
  <img class="ui right floated image" src="images/body_combat.jpg">
  <h2>¿Qué es el Body Combat?</h2>
  <p>El Body Combat es una modalidad de Fitness que nació hace algunos años en un gimnasio de Nueva Zelanda. A pesar de ser relativamente nuevo, se ha convertido en una de las actividades más atractivas de los gimnasios del mundo entero.<BR>
  <BR>
Al parecer, su éxito radica en que sus movimientos cargados de adrenalina resultan estimulantes para quien los practica, produciendo cierta sensación de seguridad y de poder, ayudando además a bajar de peso.<BR>
<BR>
El Body Combat pone en funcionamiento todos los grupos de músculos, especialmente de los brazos, hombros, espalda y abdominales. El body combat permite trabajar la flexibilidad, la fuerza y la resistencia. Constituye una práctica intensa ideal para liberar estrés y para bajar de peso.<BR>
<BR>
Se recomienda practicarlo 3 veces por semana, para que la pérdida de peso y el fortalecimiento muscular sean efectivos. Incluso puede utilizarse como complemento de otra actividad física.<BR> 
<BR>
La práctica del Body Combat tiene muchos beneficios, entre ellos:<BR>
<BR>
• Mejora notablemente la capacidad aeróbica<BR>
• Fortalece todos los grupos musculares<BR>
• Aumenta la flexibilidad, fuerza y la resistencia física.<BR>
• Está indicado para bajar de peso.<BR>
• Es perfecto para combatir el estrés.<BR>
• Aumenta la autoestima, por la sensación de poder y de fuerza que produce.<BR> 
<BR>
La práctica del Body Combat es aconsejable para todas las edades (siempre que se adecúe la intensidad a las posibilidades de quien lo practica). No está recomendado para mujeres embarazadas o para personas que padecen osteocartritis en la rodilla o cadera.<BR>
<BR>
Así que ya lo sabes, si quieres ejercitarte, liberarte del estrés y bajar de peso, el Body Combat es una excelente alternativa. <BR> </p>
</div>