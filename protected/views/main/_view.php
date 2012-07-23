<div class="view">
	<table><tr><td>
		<?php 
		if ($data->image == null)
		echo CHtml::image(Yii::app()->getBaseUrl(true)."/images/default_book.png",'Libro sin imagen',array('width'=>70,'height'=>70));	
		else
		echo CHtml::image(Yii::app()->getBaseUrl(true)."/images/books/".$data->image,$data->title,array('width'=>70));
		?>
		
		</td>
		<td>
			
			
			<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->title), array(

				'book/view','id'=>$data->id)

				); ?>
			<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('ad_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->ad_type->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('booktype_id')); ?>:</b>
	<?php echo CHtml::encode($data->booktype->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condition_id')); ?>:</b>
	<?php echo CHtml::encode($data->condition->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('format_id')); ?>:</b>
	<?php echo CHtml::encode($data->format->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />
</td></tr></table>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('isbn')); ?>:</b>
	<?php echo CHtml::encode($data->isbn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_of_pages')); ?>:</b>
	<?php echo CHtml::encode($data->number_of_pages); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publisher')); ?>:</b>
	<?php echo CHtml::encode($data->publisher); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edition')); ?>:</b>
	<?php echo CHtml::encode($data->edition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
	<?php echo CHtml::encode($data->keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abstract')); ?>:</b>
	<?php echo CHtml::encode($data->abstract); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>