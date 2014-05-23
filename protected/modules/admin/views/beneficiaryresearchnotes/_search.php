<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->DropDownListRow($model, 'support_type', ENUMHtml::enumItem($model, 'support_type'), array('class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->DropDownListRow($model, 'support_period', ENUMHtml::enumItem($model, 'support_period'), array('class'=>'span5', 'maxlength'=>14)); ?>

	<?php echo $form->textFieldRow($model,'expected_support_period',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->DropDownListRow($model, 'support_modality', ENUMHtml::enumItem($model, 'support_modality'), array('class'=>'span5', 'maxlength'=>23)); ?>

	<?php echo $form->DropDownListRow($model, 'information_source', ENUMHtml::enumItem($model, 'information_source'), array('class'=>'span5', 'maxlength'=>18)); ?>

	<?php echo $form->DropDownListRow($model, 'has_small_business_idea', ENUMHtml::enumItem($model, 'has_small_business_idea'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'small_business_idea_description',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'researcher_recommendations',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'researcher_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'committee_recommendations',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'committee_member_name',array('class'=>'span5','maxlength'=>512)); ?>

	<?php echo $form->textFieldRow($model,'committee_manager_name',array('class'=>'span5','maxlength'=>512)); ?>

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
