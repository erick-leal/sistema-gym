
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<br>
<br>
<br>
<br>
 
<?php 
$this->widget('application.extensions.socialLink.socialLink', array(
    'style'=>'left', //alignment - left, right
    'top'=>'30',  //in percentage
        'media' => array(
        'facebook'=>array(
            'url'=>'http://www.facebook.com/',
            'target'=>'_blank',
        ),
        'twitter'=>array(
            'url'=>'http://twitter.com/',
            'target'=>'_blank',
        ),
        'google-plus'=>array(
            'url'=>'https://plus.google.com/',
            'target'=>'_blank',
        ),
        'linkedin'=>array(
            'url'=>'http://linkedin.com/',
            'target'=>'_blank',
        ),
        'rss'=>array(
            'url'=>'http://rss.com/',
            'target'=>'_blank',
        ), 
      )
));
 
 ?>




<?php 
$this->widget('ext.adGallery.AdGallery',
 array(
 'agWidth' => 900,//ncho de la galería
 'agHeight' => 220, // Alto de la galería
 'agThumbWidth' => 0, // Ancho de la imagen miniatura
 'agThumbHeight' => 0, // Alto de la imagen miniatura 
 'agEffect' => 'slide-hori', // Efecto de transición (slide-vert)
 'agSlideShowAutoStart' => 'true', // Autoinicio
 //'agSlideShowEnable' => 'false', 
 'agSlideShowStartLabel' => 'Iniciar', // Etiqueta de inicio
 'agSlideShowStopLabel' => 'Detener', // Etiqueta de pausa
 'imageList' => array(
  array(
   'image_url' => 'images/gim1.jpg',
   'title' => '',
   'link' => 'producto/1',
   'alt' => '',
  ),
  array(
   'image_url' => 'images/gim2.jpg',
   'title' => '',
   'link' => 'producto/2',
   'alt' => '',
  ),
  array(
   'image_url' => 'images/gim3.jpg',
   'title' => '',
   'link' => 'producto/3',
   'alt' => '',
  ),
  array(
   'image_url' => 'images/gim4.jpg',
   'title' => '',
   'link' => 'producto/4',
   'alt' => '',
  ),
 ),
));
?>

<img class="ui left floated image" src="images/pic.png">
<BR><BR><BR><BR><BR><BR><BR>
<CENTER><h1 class="m_11">Bienvenido a HYPERTROPHIA!</h1></CENTER>
<CENTER>Centro de musculación y Fitness</CENTER>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>


<div class="ui segment">
  <div class="ui vertical segment">
   <img class="ui right floated image" src="images/pic5.jpg">
    <p><p><h2>¿Por qué elegirnos?</h2>
      	<p>Nuestro gimnasio te brindan un servicio de excelencia y 
      	todas las herramientas necesarias para que logres lo 
      	que te propones conectándote con la energía que te hace más pleno...</p>
      	<BR>
      	<div class="ui button"  onClick="location.href='http://127.0.0.1/gym/index.php?r=site/page&view=porque'" >Leer mas...</div></p></p>
  </div>
  <div class="ui vertical segment">
   <img class="ui right floated image" src="images/pic18.jpg">
    <p><p><h2>¡Logra tu meta!</h2>
      	<p>Sea tu objetivo bajar de peso, desarrollar músculos,
      	 entrenar resistencia, mejorar tu condición física,
      	  reducir el estrés o simplemente sentirte mejor...<BR> </p>
      	  <BR>
      	<div class="ui button"  onClick="location.href='http://127.0.0.1/gym/index.php?r=site/page&view=logra'" >Leer mas...</div></p></p>
  </div>
  <div class="ui vertical segment">
   <img class="ui right floated image" src="images/c7.jpg">
    <p><h2>¿Qué es el Body Combat?</h2>
      	<p> El Body Combat es una modalidad de Fitness 
      	que nació hace algunos años en un gimnasio de Nueva Zelanda.
      	 A pesar de ser relativamente nuevo, se ha convertido en una...</p>
      	 <div class="ui button"  onClick="location.href='http://127.0.0.1/gym/index.php?r=site/page&view=body-combat'" >Leer mas...</div></p></p>
  </div>
</div>
