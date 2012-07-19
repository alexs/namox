<?php
$this->breadcrumbs=array(
	'Mis Libros',
);

$this->menu=array(
	array('label'=>'Nuevo anuncio', 'url'=>array('create')),
	array('label'=>'Administrar anuncios', 'url'=>array('admin')),
);
?>

<h1>Mis libros anunciados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
