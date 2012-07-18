<?php
$this->breadcrumbs=array(
	'Booktypes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Booktype', 'url'=>array('index')),
	array('label'=>'Create Booktype', 'url'=>array('create')),
	array('label'=>'View Booktype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Booktype', 'url'=>array('admin')),
);
?>

<h1>Update Booktype <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>