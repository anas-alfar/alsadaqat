<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'mosque-type-form',
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

	<?php echo $form->textFieldControlGroup($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'construction_area',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'construction_cost',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'construction_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'construction_type',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'furniture_type',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_people',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_restrooms',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_floors',array('class'=>'span5')); ?>

	<?php echo $form->textFieldControlGroup($model,'number_of_entrances',array('class'=>'span5')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_female_area', ENUMHtml::enumItem($model, 'has_female_area'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_sound_system', ENUMHtml::enumItem($model, 'has_sound_system'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'has_air_condition', ENUMHtml::enumItem($model, 'has_air_condition'), array('class'=>'span5', 'maxlength'=>3)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'agent_id', MosqueAgent::model()->getOptions(), array('empty' =>$model->getAttributeLabel('agent_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php //echo $form->textFieldControlGroup($model,'owner_id',array('class'=>'span5','maxlength'=>11)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
