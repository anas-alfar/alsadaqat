<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'country_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'name_ar',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->DropDownListRow($model, 'published', ENUMHtml::enumItem($model, 'published'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'updated_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>Yii::t('app', 'Search'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
