<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'beneficiary-widow-form',
    'enableAjaxValidation'   => false,
    'enableClientValidation' => true,
    'htmlOptions' => array(
        'class' => 'well',
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

	<?php echo $form->textFieldControlGroup($model,'husband_full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'husband_job',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldControlGroup($model,'husband_date_of_birth',array('class'=>'span5')); ?>
    <?php
        $husbandDateOfBirth = $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
            'model' => $model,
            'attribute' => 'husband_date_of_birth',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-mm-dd'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($husbandDateOfBirth, $model, 'husband_date_of_birth'); ?>
    <?php $form->error($model, 'husband_date_of_birth')?>

	<?php //echo $form->textFieldControlGroup($model,'husband_date_of_death',array('class'=>'span5')); ?>
    <?php
        $husbandDateOfDeath = $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
            'model' => $model,
            'attribute' => 'husband_date_of_death',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-mm-dd'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($husbandDateOfDeath, $model, 'husband_date_of_death'); ?>
    <?php $form->error($model, 'husband_date_of_death')?>

	<?php echo $form->textFieldControlGroup($model,'husband_reason_of_death',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'husband_death_certificate_path',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_sons',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_daughters',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'beneficiary_id', Beneficiary::model()->getOptions(), array('empty' =>$model->getAttributeLabel('beneficiary_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
