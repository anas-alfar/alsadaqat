<?php

    $formRules = array(
        'id'=>'city-form',
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
    );

    if ( isset($fancy) ) {
        Yii::app()->clientScript->scriptMap = array( 
            'jquery.js'             => false, 
            'jquery.min.js'         => false, 
            'jquery-ui.min.js'      => false, 
            'jquery.yiigridview.js' => false, 
            'jquery.yiiactiveform.js' => false 
        );
        
        $readOnly  = true;
        $formRules = array( 
            'id' => 'city-form', 
            'enableAjaxValidation'   => true,
            'enableClientValidation' => true,
            'clientOptions'          => array(
                'validateOnChange' => false,
                'validateOnSubmit' => true,
                'afterValidate'    => 'js:function(form, data, hasError) {
                    if(hasError) {
                        for(var i in data){
                            $("html, body").animate({
                              scrollTop: jQuery("div.error").offset().top - 100
                             }, 1000);
                             return false;
                        }
                    } else {
                        jQuery.fancybox.close();
                        updateDesireDropDown( getCitisUrl, "Mosque_city_id", "City", jQuery("#Mosque_country_id").attr("value") )
                        return false;
                   }
                }',
            )
        );

    }

?>




<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', $formRules); ?>

	<p class="help-block"><?php echo Yii::t('app', 'Fields with <span class="required">*</span> are required' )?>.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListControlGroup($model, 'country_id', Country::model()->getOptions(), array('empty' =>$model->getAttributeLabel('country_id'), 'class'=>'span5', 'maxlength'=>11)); ?>

	<?php echo $form->textFieldControlGroup($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldControlGroup($model,'name_ar',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListControlGroup($model, 'published', ENUMHtml::enumItem($model, 'published'), array('class'=>'span5', 'maxlength'=>3)); ?>

    <?php echo $form->textFieldControlGroup($model,'population_count',array('class'=>'span5', 'maxlength'=>11)); ?>

    <?php echo $form->textFieldControlGroup($model,'houses_count',array('class'=>'span5', 'maxlength'=>11)); ?>

    <?php echo $form->textFieldControlGroup($model,'distance_to_capital',array('class'=>'span5', 'maxlength'=>11)); ?>

    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'), array(
            'color'=> TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        )); ?>
    </div>

<?php $this->endWidget(); ?>
