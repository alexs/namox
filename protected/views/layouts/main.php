<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl."/assets/js/jquery.jtweetsanywhere-1.3.1.min.js"); ?>
<?php Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl."/assets/js/jtweetsanywhere-de-1.3.1.min.js"); ?>
<script type="text/javascript" src="http://platform.twitter.com/anywhere.js?id=APIKey&v=1"></script>
<?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/jquery.jtweetsanywhere-1.3.1.css"); ?>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	
	<script type='text/javascript'>
	   $(document).ready(function(){
	    $('#tweetFeed').jTweetsAnywhere({
		username: 'vozdeletras',
	 searchParams: 'q=vozdeletras',
	        count: 3,
	        showTweetFeed: {
				showTwitterBird: false,  
	            showProfileImages: true,
	            showUserScreenNames: true,
	            showUserFullNames: false,
	            showActionReply: false,
	            showActionRetweet: false,
	            showActionFavorite: false
	        },
	    });
	});
	</script>
</head>

<body>
	
		
<div class="container" id="page">
	<div id="login">
		
	<?php 
	if (Yii::app()->user->isGuest){
		echo CHtml::link(Yii::app()->getModule('user')->t("Register"), Yii::app()->getModule('user')->registrationUrl);
		echo " | ";
		echo CHtml::link(Yii::app()->getModule('user')->t("Login"),  Yii::app()->getModule('user')->loginUrl);
	}	
	if (!Yii::app()->user->isGuest){
		echo 'Hola '.Yii::app()->user->name.". ";
		echo CHtml::link(' Mi cuenta',  Yii::app()->getModule('user')->loginUrl);
		}
	
	?>
	</div>
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<br />
		<br />
		<br />
		<br />
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/')),
				array('label'=>'Libros', 'url'=>array('/book/index')),
				array('label'=>'Revistas', 'url'=>array('/book/index')),
				array('label'=>'Tesis', 'url'=>array('/book/index')),
				
		//		array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
	//			array('label'=>'Contact', 'url'=>array('/site/contact')),
//				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'),

/*
array('label'=>'Inicio', 'url'=>array('/'), 'visible'=>Yii::app()->user->isGuest),

		array('label'=>'Mis libros', 'url'=>array('/book/index'), 'visible'=>!Yii::app()->user->isGuest),

				array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
				array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
				array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),		
				
		*/	),
			
		)); ?>
	</div><!-- mainmenu -->

		 <div id="leftcolumn">
		 
					<div class="box">
						<h3>Bienvenido</h3>
						<p>
Voz de Letras es el sitio Gratuito, donde puedes anunciar esos libros o documentos que ya no utilizas, para que alguien más pueda contactarte, y si tu deseas, venderlos, regalarlos, intercambiarlos...</p>

					</div>
		 
		 </div>
		 <!-- End Left Column -->
		 
		 <!-- Begin Content Column -->
		 <div id="content">
		       
		 <?php echo $content; ?>
		 </div>
		 <!-- End Content Column -->
		 
		 <!-- Begin Right Column -->
		 <div id="rightcolumn"><p>
			<?php 
			echo CHtml::image(Yii::app()->baseUrl."/images/facebook_icon.png");
			
			echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/twitter_icon.png"),"https://twitter.com/vozdeletras", array('target'=>'_blank'));
			
			
			?>
			</p>
			<p>
			<?php echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/images/registrate.png" height="150"/>',Yii::app()->getModule('user')->registrationUrl); ?>
			</p>
			<p>
				<div class="box">
					<h3>Útimos tweets</h3>
					 <div id="tweetFeed">
					 </div>
				 </div>	
		 	</p>
		 </div>
		 <!-- End right Column -->
		
		
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Voz de letras MX.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
