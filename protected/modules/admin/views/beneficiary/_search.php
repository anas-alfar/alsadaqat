<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions' => array(
        'class' => 'well',
    ),
)); ?>

	<?php echo $form->textFieldControlGroup($model,'id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'ssn',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'gender', ENUMHtml::enumItem($model, 'gender'), array('class'=>'span5', 'maxlength'=>6)); ?>

	<?php echo $form->textFieldControlGroup($model,'date_of_birth',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'home_phone',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldControlGroup($model,'mobile',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldControlGroup($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'personal_photo_path',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'nationality_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('nationality_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11, 'onChange' =>"updateCitiesDropDown( this.value, 'Beneficiary_city_id','".$model->getAttributeLabel('city')."')")); ?>

    <?php echo $form->dropDownListControlGroup($model,'city_id', array() ,array('empty' =>$model->getAttributeLabel('city_id'), 'class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'beneficiary_type', ENUMHtml::enumItem($model, 'beneficiary_type'), array('class'=>'span5', 'maxlength'=>8)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_paterfamilias', ENUMHtml::enumItem($model, 'has_paterfamilias'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_family_members', ENUMHtml::enumItem($model, 'has_family_members'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_home', ENUMHtml::enumItem($model, 'has_home'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_income', ENUMHtml::enumItem($model, 'has_income'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldControlGroup($model,'organization_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'organization_branch_id', OrganizationBranch::model()->getOptions(), array('empty' =>$model->getAttributeLabel('organization_branch_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'donator_id', Donator::model()->getOptions(), array('empty' =>$model->getAttributeLabel('donator_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'created_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'updated_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'notes',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldControlGroup($model,'options',array('class'=>'span5','maxlength'=>1024)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>Yii::t('app', 'Search'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
