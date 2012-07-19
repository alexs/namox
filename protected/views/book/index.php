<?php
$this->breadcrumbs=array(
	'Mis Libros',
);

$this->menu=array(
	array('label'=>'Nuevo libro', 'url'=>array('create')),
	array('label'=>'Administrar mis libros', 'url'=>array('admin')),
);
?>

<h1>Mis libros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
