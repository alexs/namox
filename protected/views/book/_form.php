<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'book-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Campos con<span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
	<table><tr><td>
	<div class="row">
	<?php echo $form->labelEx($model,'ad_type_id'); ?>
	<?php echo CHtml::activeDropDownList($model,'ad_type_id', CHtml::listData(AdType::model()->findAll(), 'id', 'name'), array( 'onChange' => 'javascript:show_trade_fields()' )); ?>
	<?php echo $form->error($model,'ad_type_id'); ?>
	</div>
</td><td>
	<div class="row">
		<?php echo $form->labelEx($model,'booktype_id'); ?>
	<?php echo CHtml::activeDropDownList($model, 'booktype_id', CHtml::listData(Booktype::model()->findAll(), 'id', 'name')); ?>
	<?php echo $form->error($model,'booktype_id'); ?>
	</div>
</td><td>
	<div class="row">
		<?php echo $form->labelEx($model,'subject_id'); ?>
		<?php $model->subject_id = 27; ?>
		<?php echo CHtml::activeDropDownList($model, 'subject_id', CHtml::listData(Subject::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'subject_id'); ?>
	</div>
</td></tr>
<tr><td>

	

	<div class="row">
		<?php echo $form->labelEx($model,'condition_id'); ?>
<?php echo CHtml::activeDropDownList($model, 'condition_id', CHtml::listData(Condition::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'condition_id'); ?>
	</div>
</td><td>
	<div class="row">
		<?php echo $form->labelEx($model,'format_id'); ?>
		<?php echo CHtml::activeDropDownList($model, 'format_id', CHtml::listData(Format::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'format_id'); ?>
	</div>
	</td>
	<td></td>
	</tr></table>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>


	<div class="row_trade">
		<?php echo $form->labelEx($model,'trade_title'); ?>
		<?php echo $form->textField($model,'trade_title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'trade_title'); ?>
	</div>

	<div class="row_trade">
		<?php echo $form->labelEx($model,'trade_author'); ?>
		<?php echo $form->textField($model,'trade_author',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'trade_author'); ?>
	</div>
	
	<div class="row_trade">
		<?php echo $form->labelEx($model,'trade_subject_id'); ?>
		<?php echo CHtml::activeDropDownList($model, 'trade_subject_id', CHtml::listData(Subject::model()->findAll(), 'id', 'name'), array('empty'=>'Si deseas, elige un género.')); ?>
		<?php echo $form->error($model,'trade_subject_id'); ?>
	</div>
	


	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'isbn'); ?>
		<?php echo $form->textField($model,'isbn',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'isbn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number_of_pages'); ?>
		<?php echo $form->textField($model,'number_of_pages',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'number_of_pages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publisher'); ?>
		<?php echo $form->textField($model,'publisher',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'publisher'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edition'); ?>
		<?php echo $form->textField($model,'edition',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'edition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abstract'); ?>
		<?php echo $form->textArea($model,'abstract',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'abstract'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->