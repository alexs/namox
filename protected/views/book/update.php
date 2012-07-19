<?php
$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Mis anuncios', 'url'=>array('index')),
	array('label'=>'Nuevo anuncio', 'url'=>array('create')),
	array('label'=>'Mostrar sin editar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar anuncios', 'url'=>array('admin')),
	
);
?>

<h1>Update Book <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>