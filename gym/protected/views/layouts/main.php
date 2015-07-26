<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mbmenu.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo "<img src=\"LOGOGYM3.jpg\">";?></div>
	</div><!-- header -->

<?php	 $booleanResult = Yii::app()->user->isSuperAdmin; //SABER SI EL QL ES super admin
			 $invitado = Yii::app()->user->isGuest; //SABER SI EL QL ES invitado 

			 if ($invitado){ // MOSTRAR SOLO SI ES USUARIO ?>


	<div id="mainMbMenu">
		
<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
       

                array('label'=>'Como comenzar', 
                  'items'=>array(
                    array('label'=>'1. ¿Por qué elegirnos ?', 'url'=>array('/site/page','view'=>'porque')),
                    array('label'=>'2. ¿Cómo incomporarse ?', 'url'=>array('/site/page','view'=>'como')),
                    array('label'=>'3. Logra tu meta !', 'url'=>array('/site/page','view'=>'logra')),
                    
                  ),
                ),
                
                array('label'=>'Servicios ',
                  'items'=>array(
                    array('label'=>'Musculación', 'url'=>array('/site/page','view'=>'musculacion')),
					array('label'=>'Fitness',
                      'items'=>array(
                        array('label'=>'Zumba', 'url'=>array('/site/page','view'=>'zumba')),
                        array('label'=>'Baile Entretenido', 'url'=>array('/site/page','view'=>'baile-entretenido')),
                      ),
                    ),
                  	array('label' => 'Cardiovascular', 
                  	'items'=> array(
                  		array('label'=>'Body-Combat', 'url'=>array('/site/page','view'=>'body-combat')),
                  		)
                  	) 
                  ),
                ),
               
			    
			    array('label'=>'Noticias', 'url'=>array('/site/page','view'=>'noticia')),
			    array('label'=>'Horario', 'url'=>array('/site/page','view'=>'horario')),
			    array('label'=>'Preguntas frecuentes', 'url'=>array('/site/page','view'=>'preguntas')),
			  
				array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login'
					, 'url'=>Yii::app()->user->ui->loginUrl
					, 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')'
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>




	</div><!-- mainmenu -->

<?php  


				 };




if((Yii::app()->user->checkAccess('Instructor')) && (!$booleanResult)){


 ?>

<div id="mainMbMenu">
		
<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
       

                array('label'=>'Como comenzar', 
                  'items'=>array(
                    array('label'=>'1. ¿Por qué elegirnos ?', 'url'=>array('/site/page','view'=>'porque')),
                    array('label'=>'2. ¿Cómo incomporarse ?', 'url'=>array('/site/page','view'=>'como')),
                    array('label'=>'3. Logra tu meta !', 'url'=>array('/site/page','view'=>'logra')),
                    
                  ),
                ),
                
                array('label'=>'Servicios ',
                  'items'=>array(
                    array('label'=>'Musculación', 'url'=>array('/site/page','view'=>'musculacion')),
					array('label'=>'Fitness',
                      'items'=>array(
                        array('label'=>'Zumba', 'url'=>array('/site/page','view'=>'zumba')),
                        array('label'=>'Baile Entretenido', 'url'=>array('/site/page','view'=>'baile-entretenido')),
                      ),
                    ),
                  	array('label' => 'Cardiovascular', 
                  	'items'=> array(
                  		array('label'=>'Body-Combat', 'url'=>array('/site/page','view'=>'body-combat')),
                  		)
                  	) 
                  ),
                ),
               
			    
			    array('label'=>'Noticias', 'url'=>array('/site/page','view'=>'noticia')),
			    array('label'=>'Horario', 'url'=>array('/site/page','view'=>'horario')),
			    array('label'=>'Preguntas frecuentes', 'url'=>array('/site/page','view'=>'preguntas')),
			    array('label'=>'Ficha Usuarios', 'url'=>array('/ficha')),
				
				array('label'=>'Login'
					, 'url'=>Yii::app()->user->ui->loginUrl
					, 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')'
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>




	</div><!-- mainmenu -->


	<?php  





}; ?>


<?php   
			

			if ($booleanResult){ // MOSTRAR SOLO SI ES admin

				 ?>

				 <div id="mainMbMenu">
		
<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
       

                array('label'=>'Como comenzar', 
                  'items'=>array(
                    array('label'=>'1. ¿Por qué elegirnos ?', 'url'=>array('/site/page','view'=>'porque')),
                    array('label'=>'2. ¿Cómo incomporarse ?', 'url'=>array('/site/page','view'=>'como')),
                    array('label'=>'3. Logra tu meta !', 'url'=>array('/site/page','view'=>'logra')),
                    
                  ),
                ),
                
                array('label'=>'Servicios ',
                  'items'=>array(
                    array('label'=>'Musculación', 'url'=>array('/site/page','view'=>'musculacion')),
					array('label'=>'Fitness',
                      'items'=>array(
                        array('label'=>'Zumba', 'url'=>array('/site/page','view'=>'zumba')),
                        array('label'=>'Baile Entretenido', 'url'=>array('/site/page','view'=>'baile-entretenido')),
                      ),
                    ),
                  	array('label' => 'Cardiovascular', 
                  	'items'=> array(
                  		array('label'=>'Body-Combat', 'url'=>array('/site/page','view'=>'body-combat')),
                  		)
                  	) 
                  ),
                ),
                array('label'=>'Usuarios', 'url'=>array('/usuario')),
			    array('label'=>'Personal', 'url'=>array('/personal')),
			    
			    array('label'=>'Noticias', 'url'=>array('/site/page','view'=>'noticia')),
			    array('label'=>'Horario', 'url'=>array('/site/page','view'=>'horario')),
			    array('label'=>'Preguntas frecuentes', 'url'=>array('/site/page','view'=>'preguntas')),
			    array('label'=>'Ficha Usuarios', 'url'=>array('/ficha')),
				array('label'=>'Administrar Usuarios'
					, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
					, 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login'
					, 'url'=>Yii::app()->user->ui->loginUrl
					, 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')'
					, 'url'=>Yii::app()->user->ui->logoutUrl
					, 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>




	</div><!-- mainmenu -->

		<?php  


				 };

				 

 ?>




	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>


</div><!-- page -->

</body>
</html>
