<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'ssn',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldRow($model,'date_of_birth',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'beneficiary_relation_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'marital_status',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'educational_status',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'health_status',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'business',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'other',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'beneficiary_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

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
