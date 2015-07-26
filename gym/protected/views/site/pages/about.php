<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1></h1>


<?php

$this->widget('zii.widgets.jui.CJuiAccordion',array(

    'panels'=>array(



        '1. Por que elegirnos ?'=>'Nuestros gimnasios te brindan un servicio de excelencia 
        y todas las herramientas necesarias para que logres lo que te propones conectándote 
        con la energía que te hace más pleno, entusiasta y feliz.
Siempre escuchamos las necesidades de nuestros socios y día a día nos esforzamos por ser 
los mejores del mercado. Por eso estamos constantemente invirtiendo en mejorar nuestras
 instalaciones, máquinas, tecnologías y servicio. Nos hemos propuesto no sólo ser los mejores 
 del mercado en Chile, si no de Latinoamérica.',

        '2. Como incorporarse ?'=>'Sigue paso a paso como incorporarse a Hypertrhopia',

        // panel 3 contains the content rendered by a partial view

        '3. Logra tu meta !'=>$this->renderPartial('_renderpage',null,true),

    ),

    // additional javascript options for the accordion plugin

    'options'=>array(

        'animated'=>'bounceslide',

        'style'=>array('minHeight'=>'100'),



    ),

     

));

?>
