<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'beneficiary-research-notes-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'class' => 'well',
    ),
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListControlGroup($model, 'support_type', ENUMHtml::enumItem($model, 'support_type'), array('class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'support_period', ENUMHtml::enumItem($model, 'support_period'), array('class'=>'span5', 'maxlength'=>14)); ?>

	<?php echo $form->textFieldControlGroup($model,'expected_support_period',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'support_modality', ENUMHtml::enumItem($model, 'support_modality'), array('class'=>'span5', 'maxlength'=>23)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'information_source', ENUMHtml::enumItem($model, 'information_source'), array('class'=>'span5', 'maxlength'=>18)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_small_business_idea', ENUMHtml::enumItem($model, 'has_small_business_idea'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldControlGroup($model,'small_business_idea_description',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'researcher_recommendations',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldControlGroup($model,'researcher_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'notes',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldControlGroup($model,'committee_recommendations',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldControlGroup($model,'committee_member_name',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldControlGroup($model,'committee_manager_name',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'beneficiary_id', Beneficiary::model()->getOptions(), array('empty' =>$model->getAttributeLabel('beneficiary_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
