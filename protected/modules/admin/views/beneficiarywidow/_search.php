<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions' => array(
        'class' => 'well',
    ),
)); ?>

	<?php echo $form->textFieldControlGroup($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'husband_full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'husband_job',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'husband_date_of_birth',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'husband_date_of_death',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'husband_reason_of_death',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'husband_death_certificate_path',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_sons',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_daughters',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'beneficiary_id', Beneficiary::model()->getOptions(), array('empty' =>$model->getAttributeLabel('beneficiary_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'updated_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>Yii::t('app', 'Search'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
