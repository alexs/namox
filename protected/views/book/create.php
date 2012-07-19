<?php
$this->breadcrumbs=array(
	'Books'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Mis anuncios', 'url'=>array('index')),
	array('label'=>'Administrar mis anuncios', 'url'=>array('admin')),
);
?>

<h1>Registrar anuncio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>