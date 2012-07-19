<?php
$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Mis anuncios', 'url'=>array('index')),
	array('label'=>'Nuevo anuncio', 'url'=>array('create')),
	array('label'=>'Actualizar anuncio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar anuncio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Esta seguro de eliminar este anuncio?')),
	array('label'=>'Administrar anuncios', 'url'=>array('admin')),
);
?>

<h1>Detalles del anuncio. </h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'ad_type_id','value'=>$model->ad_type->name),
		array('name'=>'booktype_id','value'=>$model->booktype->name),
		array('name'=>'subject_id','value'=>$model->subject->name),
		array('name'=>'condition_id','value'=>$model->condition->name),
		array('name'=>'format_id','value'=>$model->format->name),
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
		'updated_at',
	),
)); ?>
