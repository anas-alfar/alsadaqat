<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'husband_full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'husband_job',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'husband_date_of_birth',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'husband_date_of_death',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'husband_reason_of_death',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'husband_death_certificate_path',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'number_of_sons',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'number_of_daughters',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListRow($model, 'beneficiary_id', Beneficiary::model()->getOptions(), array('empty' =>$model->getAttributeLabel('beneficiary_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

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
