<?php
$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Book', 'url'=>array('index')),
	array('label'=>'Create Book', 'url'=>array('create')),
	array('label'=>'Update Book', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Book', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Book', 'url'=>array('admin')),
);
?>

<h1>View Book #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'booktype_id',
		'subject_id',
		'condition_id',
		'format_id',
		'title',
		'author',
		'isbn',
		'number_of_pages',
		'publisher',
		'edition',
		'year',
		'keywords',
		'abstract',

		array('type'=>'image','value'=>Yii::app()->getBaseUrl(true).'/images/books/'.$model->image, 'label'=>'Uploaded Image'),

		'created_at',
		'user_id',
		'updated_at',
	),
)); ?>
