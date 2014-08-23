<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id' => 'beneficiary-form',
	'enableAjaxValidation'   => false,
	'enableClientValidation' => true,
    'htmlOptions' => array(
        'class'   => 'well',
        'enctype' => 'multipart/form-data',
    ),
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'afterValidate'    => 'js:function(form, data, hasError) {
            if(hasError) {
              for(var i in data){
                $("html, body").animate({
                  scrollTop: $("div.error").offset().top - 100
                 }, 1000);
                 return false;
              } 
           }else{
            return true;
           }
        }',
    ),
)); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'ssn',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'gender', ENUMHtml::enumItem($model, 'gender'), array('class'=>'span5', 'maxlength'=>6)); ?>

    <?php
        $datePicker = $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
            //'name' => 'date_of_birth',
            'model' => $model,
            'attribute' => 'date_of_birth',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-mm-dd'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>

	<?php echo TbHtml::customActiveControlGroup($datePicker, $model, 'date_of_birth'); ?>
	<?php $form->error($model, 'date_of_birth')?>

	<?php echo $form->textFieldControlGroup($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'home_phone',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldControlGroup($model,'mobile',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldControlGroup($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldControlGroup($model,'personal_photo_path',array('class'=>'span5','maxlength'=>255)); ?>

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

	<?php echo $form->dropDownListControlGroup($model, 'nationality_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('nationality_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11, 'onChange' =>"updateCitiesDropDown( this.value, 'Beneficiary_city_id','".$model->getAttributeLabel('city')."')")); ?>

	<?php echo $form->dropDownListControlGroup($model,'city_id', $this->cities ,array('empty' =>$model->getAttributeLabel('city_id'), 'class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'beneficiary_type', ENUMHtml::enumItem($model, 'beneficiary_type'), array('class'=>'span5', 'maxlength'=>8)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_paterfamilias', ENUMHtml::enumItem($model, 'has_paterfamilias'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_family_members', ENUMHtml::enumItem($model, 'has_family_members'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_home', ENUMHtml::enumItem($model, 'has_home'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_income', ENUMHtml::enumItem($model, 'has_income'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php //echo $form->textFieldControlGroup($model,'organization_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php //echo $form->dropDownListControlGroup($model, 'organization_branch_id', OrganizationBranch::model()->getOptions(), array('empty' =>$model->getAttributeLabel('organization_branch_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'donator_id', Donator::model()->getOptions(), array('empty' =>$model->getAttributeLabel('donator_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php //echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'notes',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldControlGroup($model,'options',array('class'=>'span5','maxlength'=>1024)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
            'size'=>TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>
	

<?php $this->endWidget(); ?>
