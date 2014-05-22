<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'organization-branch-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'organization_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'website',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldRow($model,'fax',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldRow($model,'mobile',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldRow($model,'country_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'city_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'adress',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'manager_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'work_days',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'work_hours',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'break_hours',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'geo_location',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->DropDownListRow($model, 'is_main_branch', ENUMHtml::enumItem($model, 'is_main_branch'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
