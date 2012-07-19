<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


<div class="row">
	<?php echo $form->label($model,'ad_type_id'); ?>
	<?php echo CHtml::activeDropDownList($model, 'ad_type_id', CHtml::listData(AdType::model()->findAll(), 'id', 'name'), array('empty'=>'')   ); ?>
</div>


	<div class="row">
		<?php echo $form->label($model,'booktype_id'); ?>
		<?php echo CHtml::activeDropDownList($model, 'booktype_id', CHtml::listData(Booktype::model()->findAll(), 'id', 'name'), array('empty'=>'')   ); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject_id'); ?>
		<?php echo CHtml::activeDropDownList($model, 'subject_id', CHtml::listData(Subject::model()->findAll(), 'id', 'name'), array('empty'=>'')   ); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condition_id'); ?>
	<?php echo CHtml::activeDropDownList($model, 'condition_id', CHtml::listData(Condition::model()->findAll(), 'id', 'name'), array('empty'=>'')   ); ?>	
	</div>

	<div class="row">
		<?php echo $form->label($model,'format_id'); ?>
		<?php echo CHtml::activeDropDownList($model, 'format_id', CHtml::listData(Format::model()->findAll(), 'id', 'name'), array('empty'=>'')   ); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isbn'); ?>
		<?php echo $form->textField($model,'isbn',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number_of_pages'); ?>
		<?php echo $form->textField($model,'number_of_pages',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publisher'); ?>
		<?php echo $form->textField($model,'publisher',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edition'); ?>
		<?php echo $form->textField($model,'edition',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abstract'); ?>
		<?php echo $form->textArea($model,'abstract',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->