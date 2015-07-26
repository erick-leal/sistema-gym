<img class="ui center floated image" src="images/about_img.jpg">
<h1 class="m_11">Baile Entretenido</h1>
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
  <img class="ui right floated image" src="images/baile1.jpg" >
  <h1 class="m_11">¡Anímate!</h1>
  Esta entretenida clase combina pasos simples de baile y 
  aprendizaje de los mismos a través de pequeñas 
  coreografías de salsa, merengue, mambo, rock and roll y 
  ritmos de moda, con ejercicios ligeros para mejorar 
  el balance, fuerza, coordinación y flexibilidad de los participantes.<BR>
	<BR> 

<h2>¿Quienes pueden practicar Baile Entretenido?</h2>

Esta clase es un ejercicio está diseñado para
 personas que quieren ponerse en forma o aquellos 
 que solo quieren divertirse. Pueden participar 
 personas de diferentes edades, tallas y niveles,
  incluso aquellas que nunca han hecho ejercicio. 
  El único requisito es tener muchas ganas de pasarlo bien.<BR>
 <BR>

  
<p><h2>¿Como es una clase de Baile Entrenido?</h2> 
Esta clase tiene una duración de 60 minutos y
 se compone de un calentamiento de todos los 
 grupos musculares grandes, una porción de ejercicio 
 cardiovascular por medio del baile, flexibilidad 
 y relajación al final.
Así seas principiante, seas una persona mayor, 
tengas demasiado sobrepeso o con alguna restricción física.
 Cada participante ejercita a su propio ritmo para gradualmente
  mejorar su condición física en un ejercicio efectivo y divertido.
	</p>
<img class="ui left floated image" src="images/pic10.jpg" width='350' height='230'>
<p><h2>¿Cuales son los objetivos y beneficios?</h2> 
Esta clase es un entrenamiento cuyo objetivo 
es que el alumno se divierta y a la vez eliminar 
grasa y tonificar lento pero con excelentes resultados.
Dentro de las ventajas del Baile Entretenido 
se encuentran que ayuda a mejorar la coordinación
 y la autoestima de los alumnos.
	</p>

<p><h2>¿Desea practicar Baile Entrenido con nosotros?</h2> 
Gimnasio HYPERTROPHIA tiene disponible esta clase en distintos horarios.
 Si está interesado en conocer mas información, contáctenos y consulte nuestros horarios.
	</p>

</div>



