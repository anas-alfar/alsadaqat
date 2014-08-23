<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mosque-form',
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

	<?php echo $form->textFieldControlGroup($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'address',array('class'=>'span5','maxlength'=>255)); ?>


    <?php
        $contractDate = $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
            //'name' => 'date_of_birth',
            'model' => $model,
            'attribute' => 'contract_date',
            'pluginOptions' => array(
                'language' => (Yii::app()->language == 'ar') ? Yii::app()->language : '',
                'format' => 'yyyy-mm-dd'
            ),
            'htmlOptions' => array(
                'class' => 'span5',
            )
        ), TRUE);
    ?>

    <?php echo TbHtml::customActiveControlGroup($contractDate, $model, 'contract_date'); ?>
    <?php $form->error($model, 'contract_date')?>
	<?php //echo $form->textFieldControlGroup($model,'contract_date',array('class'=>'span5')); ?>


	<?php //echo $form->textFieldControlGroup($model,'contract_photo_path',array('class'=>'span5','maxlength'=>255)); ?>
    <div class="control-group">
        <?php echo $form->label($model, 'contract_photo_path') ?>
        <?php echo CHtml::activeFileField($model, 'image'); ?>  
        <?php echo $form->error($model,'image'); ?>
    </div>
    <?php
        if( $model->preview->hasImage() )
            echo '<div>' . CHtml::image($model->preview->getUrl('large'), 'Large image version') . '</div>';
        else
            echo '<div class="control-group">no image uploaded</div>';
    ?>
    

	<?php echo $form->textFieldControlGroup($model,'construction_progress',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'donator_id', Donator::model()->getOptions(), array('empty' =>$model->getAttributeLabel('donator_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'agent_id', MosqueAgent::model()->getOptions(), array('empty' =>$model->getAttributeLabel('agent_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'mosque_type_id', MosqueType::model()->getOptions(), array('empty' =>$model->getAttributeLabel('mosque_type_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11, 'onChange' =>"updateCitiesDropDown( this.value, 'Mosque_city_id','".$model->getAttributeLabel('city')."')")); ?>

	<?php echo $form->dropDownListControlGroup($model,'city_id', $this->cities, array('empty' =>$model->getAttributeLabel('city_id'), 'class'=>'span5','maxlength'=>11)); ?>

	<?php //echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'notes',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php echo $form->textFieldControlGroup($model,'options',array('class'=>'span5','maxlength'=>1024)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
