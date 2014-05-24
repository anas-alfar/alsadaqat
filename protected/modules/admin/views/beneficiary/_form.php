<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'beneficiary-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'ssn',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->DropDownListRow($model, 'gender', ENUMHtml::enumItem($model, 'gender'), array('class'=>'span5', 'maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'date_of_birth',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'home_phone',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldRow($model,'mobile',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'personal_photo_path',array('class'=>'span5','maxlength'=>255)); ?>

    <div>
        <?php echo $form->label($model, 'personal_photo_path') ?>
        <?php echo CHtml::activeFileField($model, 'image'); ?>  
        <?php echo $form->error($model,'image'); ?>
    </div>
    <?php
        if( $model->preview->hasImage() )
            echo '<div>' . CHtml::image($model->preview->getUrl('large'), 'Large image version') . '</div>';
        else
            echo '<div>no image uploaded</div>';
    ?>

	<?php echo $form->dropDownListRow($model, 'nationality_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('nationality_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListRow($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'city_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->DropDownListRow($model, 'beneficiary_type', ENUMHtml::enumItem($model, 'beneficiary_type'), array('class'=>'span5', 'maxlength'=>8)); ?>

	<?php echo $form->DropDownListRow($model, 'has_paterfamilias', ENUMHtml::enumItem($model, 'has_paterfamilias'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->DropDownListRow($model, 'has_family_members', ENUMHtml::enumItem($model, 'has_family_members'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->DropDownListRow($model, 'has_home', ENUMHtml::enumItem($model, 'has_home'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->DropDownListRow($model, 'has_income', ENUMHtml::enumItem($model, 'has_income'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'organization_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListRow($model, 'organization_branch_id', OrganizationBranch::model()->getOptions(), array('empty' =>$model->getAttributeLabel('organization_branch_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListRow($model, 'donator_id', Donator::model()->getOptions(), array('empty' =>$model->getAttributeLabel('donator_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldRow($model,'options',array('class'=>'span5','maxlength'=>1024)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
