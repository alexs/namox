<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/front.css" />
<title>Voz de Letras</title>

</head>

<body>
	<?php echo CHtml::link(Yii::app()->getModule('user')->t("Login"),Yii::app()->getModule('user')->loginUrl); ?>
		
	

   <!-- Begin Wrapper -->
   <div id="wrapper">
   
         <!-- Begin Header -->
         <div id="header">
		 
		      <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			
			   
		 </div>
		 <!-- End Header -->
		 
		 <!-- Begin Navigation -->
         <div id="navigation">
		 
		   
			   
		 </div>
		 <!-- End Navigation -->
		 
		 <!-- Begin Left Column -->
		 <div id="leftcolumn">
		 
		       Left Column
		 
		 </div>
		 <!-- End Left Column -->
		 
		 <!-- Begin Content Column -->
		 <div id="content">
		       
		 <?php echo $content; ?>
		 </div>
		 <!-- End Content Column -->
		 
		 <!-- Begin Right Column -->
		 <div id="rightcolumn">
		 
		       Right Column
		 
		 </div>
		 <!-- End Right Column -->
		 
		 <!-- Begin Footer -->
		 <div id="footer">
		       
			 	Copyright &copy; <?php echo date('Y'); ?> by Voz de letras MX.<br/>
				All Rights Reserved.<br/>
			    
	     </div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
   
</body>
</html>
