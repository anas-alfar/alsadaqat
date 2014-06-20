<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mosque-agent-form',
    'enableAjaxValidation'   => false,
    'enableClientValidation' => true,
    'htmlOptions' => array(
        'class'   => 'well',
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

	<?php echo $form->textFieldControlGroup($model,'company_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'title', ENUMHtml::enumItem($model, 'title'), array('class'=>'span5', 'maxlength'=>4)); ?>

	<?php echo $form->textFieldControlGroup($model,'fullname',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'ssn',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'gender', ENUMHtml::enumItem($model, 'gender'), array('class'=>'span5', 'maxlength'=>6)); ?>

	<?php echo $form->textFieldControlGroup($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'home_phone',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldControlGroup($model,'work_phone',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldControlGroup($model,'mobile',array('class'=>'span5','maxlength'=>17)); ?>

	<?php echo $form->textFieldControlGroup($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'bank_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'bank_branch_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'bank_branch_number',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'bank_swift_code',array('class'=>'span5','maxlength'=>32)); ?>

	<?php echo $form->textFieldControlGroup($model,'bank_account_number',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'personal_photo_path',array('class'=>'span5','maxlength'=>255)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11, 'onChange' =>"updateCitiesDropDown( this.value, 'MosqueAgent_city_id','".$model->getAttributeLabel('city')."')")); ?>

    <?php echo $form->dropDownListControlGroup($model,'city_id', array() ,array('empty' =>$model->getAttributeLabel('city_id'), 'class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'organization_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
