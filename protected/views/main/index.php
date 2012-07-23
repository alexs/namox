<form method="get">
<input type="search" placeholder="Ingresa titulo del Libro o Autor" name="q" size="60" value="<?php echo isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>" />
<input type="submit" value="Buscar" />
</form>
<br />

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
