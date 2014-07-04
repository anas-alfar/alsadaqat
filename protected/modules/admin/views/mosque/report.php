<meta charset="utf-8" />
<style>
    <?php 
      $webRoot= Yii::app() -> params['webroot'];
      echo  file_get_contents($webRoot . 'themes/abound/css/'.Yii::app()->language.'/bootstrap.min.css' );
      echo  file_get_contents($webRoot . 'themes/abound/css/'.Yii::app()->language.'/style-red.css' );
      echo  file_get_contents($webRoot . 'themes/abound/css/'.Yii::app()->language.'/abound.css' );
    ?>
</style>

<br /><br />

<div class="row well text-center">
    <img src="<?php echo $webRoot?>themes/abound/img/shaq-tamrah-01.jpg" title="<?php echo Yii::t('app', 'Alsadaqat'); ?>" alt="<?php echo Yii::t('app', 'Alsadaqat'); ?>"  />
</div>

<div class="text-center"><?php echo CHtml::link('Generate report as PDF',array('report','id'=>$model->id, 'isPDF' => true)); ?></div>

<div class="row-fluid">
    <div class="span12">
        <div id="yw2" class="portlet">
            <div class="portlet-decoration">
                <div class="portlet-title">معلومات عامة عن <?php echo $model->name ?></div>
            </div>
            <div class="portlet-content">
               <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                'data'=>$model,
                'attributes'=>array(
                    'id',
                    'name',
                    'address',
                    'contract_date',
                    'contract_photo_path',
                    array(
                        'name'  => 'construction_progress',
                        'type'  => 'raw',
                        'value' => TbHtml::animatedProgressBar( $model->construction_progress, array('color' => TbHtml::PROGRESS_COLOR_SUCCESS) )
                    ),
                    array('name'  => 'donator_id', 'value' => array($model, 'donatorFilter')),
                    array('name'  => 'agent_id', 'value' => array($model, 'mosqueAgentgentFilter')),
                    'mosque_type_id',
                    array('name'  => 'country_id','value' => array($model, 'countryFilter')),
                    'city_id',
                    'owner_id',
                    'created_at',
                    'updated_at',
                    'notes',
                    'options',
                    ),
                )); ?>
            </div>
        </div>    
    </div>
</div>



<br /><br />

<div class="row-fluid">
    <div class="span12">
        <div id="yw2" class="portlet">
            <div class="portlet-decoration">
                <div class="portlet-title">ألبوم صور المسجد</div>
            </div>
            <div class="portlet-content">
                <?php echo TbHtml::thumbnails( $photoGallery, array('span' => 7)); ?>
            </div>
        </div>    
    </div>
</div>

<?php //echo $this->renderInternal(Yii::getPathOfAlias('application.modules.admin.views.mosque').'/'.'_PDF.php', array('model'=>$model)); ?>