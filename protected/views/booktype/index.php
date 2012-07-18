<?php
$this->breadcrumbs=array(
	'Booktypes',
);

$this->menu=array(
	array('label'=>'Create Booktype', 'url'=>array('create')),
	array('label'=>'Manage Booktype', 'url'=>array('admin')),
);
?>

<h1>Booktypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
