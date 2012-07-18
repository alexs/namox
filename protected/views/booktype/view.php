<?php
$this->breadcrumbs=array(
	'Booktypes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Booktype', 'url'=>array('index')),
	array('label'=>'Create Booktype', 'url'=>array('create')),
	array('label'=>'Update Booktype', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Booktype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Booktype', 'url'=>array('admin')),
);
?>

<h1>View Booktype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
