<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'beneficiary-research-notes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'support_type',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'support_period',array('class'=>'span5','maxlength'=>14)); ?>

	<?php echo $form->textFieldRow($model,'expected_support_period',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'support_modality',array('class'=>'span5','maxlength'=>23)); ?>

	<?php echo $form->textFieldRow($model,'information_source',array('class'=>'span5','maxlength'=>18)); ?>

	<?php echo $form->textFieldRow($model,'has_small_business_idea',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'small_business_idea_description',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'researcher_recommendations',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'researcher_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'committee_recommendations',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'committee_member_name',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'committee_manager_name',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'beneficiary_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
