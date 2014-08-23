<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'beneficiary-student-form',
    'enableAjaxValidation'   => false,
    'enableClientValidation' => true,
    'htmlOptions' => array(
        'class'     => 'well',
        'enctype'   => 'multipart/form-data',
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

	<?php echo $form->textFieldControlGroup($model,'father_full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'is_father_alive', ENUMHtml::enumItem($model, 'is_father_alive'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldControlGroup($model,'father_job',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldControlGroup($model,'father_date_of_birth',array('class'=>'span5')); ?>
    <?php
        $fatherDateOfBirth = $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
            'model' => $model,
            'attribute' => 'father_date_of_birth',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-mm-dd'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($fatherDateOfBirth, $model, 'father_date_of_birth'); ?>
    <?php $form->error($model, 'father_date_of_birth')?>

	<?php //echo $form->textFieldControlGroup($model,'father_date_of_death',array('class'=>'span5')); ?>
    <?php
        $fatherDateOfDeath = $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
            'model' => $model,
            'attribute' => 'father_date_of_death',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-mm-dd'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($fatherDateOfDeath, $model, 'father_date_of_death'); ?>
    <?php $form->error($model, 'father_date_of_death')?>

	<?php echo $form->textFieldControlGroup($model,'father_reason_of_death',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldControlGroup($model,'father_death_certificate_path',array('class'=>'span5','maxlength'=>255)); ?>
    <div class="control-group">
        <?php echo $form->label($model, 'father_death_certificate_path') ?>
        <?php echo CHtml::activeFileField($model, 'image'); ?>  
        <?php echo $form->error($model,'image'); ?>
    </div>
    <?php
        if( $model->preview->hasImage() )
            echo '<div>' . CHtml::image($model->preview->getUrl('large'), 'Large image version') . '</div>';
        else
            echo '<div>'.Yii::t('app', 'No image uploaded') . '</div>';
    ?>

	<?php echo $form->textFieldControlGroup($model,'mother_full_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'is_mother_alive', ENUMHtml::enumItem($model, 'is_mother_alive'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->textFieldControlGroup($model,'mother_job',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldControlGroup($model,'mother_date_of_birth',array('class'=>'span5')); ?>
    <?php
        $motherDateOfBirth = $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
            'model' => $model,
            'attribute' => 'mother_date_of_birth',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-mm-dd'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($motherDateOfBirth, $model, 'mother_date_of_birth'); ?>
    <?php $form->error($model, 'mother_date_of_birth')?>

	<?php //echo $form->textFieldControlGroup($model,'mother_date_of_death',array('class'=>'span5')); ?>
    <?php
        $motherDateOfDeath = $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
            'model' => $model,
            'attribute' => 'mother_date_of_death',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-mm-dd'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>
    <?php echo TbHtml::customActiveControlGroup($motherDateOfDeath, $model, 'mother_date_of_death'); ?>
    <?php $form->error($model, 'mother_date_of_death')?>

	<?php echo $form->textFieldControlGroup($model,'mother_reason_of_death',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldControlGroup($model,'mother_death_certificate_path',array('class'=>'span5','maxlength'=>255)); ?>
    <div class="control-group">
        <?php echo $form->label($model, 'mother_death_certificate_path') ?>
        <?php echo CHtml::activeFileField($model, 'mother'); ?>  
        <?php echo $form->error($model,'mother'); ?>
    </div>
    <?php
        if( $model->motherDeathCertificate->hasImage() )
            echo '<div>' . CHtml::image($model->motherDeathCertificate->getUrl('large'), 'Large version') . '</div>';
        else
            echo '<div>'.Yii::t('app', 'No image uploaded') . '</div>';
    ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_brothers',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_sisters',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'beneficiary_id', Beneficiary::model()->getOptions(), array('empty' =>$model->getAttributeLabel('beneficiary_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php //echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
