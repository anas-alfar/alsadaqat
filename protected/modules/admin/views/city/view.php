<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Cities')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('City', 'List City'),'url'=>array('index')),
	array('label'=>Yii::t('City', 'Create City'),'url'=>array('create')),
	array('label'=>Yii::t('City', 'Update City'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('City', 'Delete City'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('City', 'Manage City'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('City', 'View City')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'type'=>'striped bordered',
	'attributes'=>array(
		'id',
		//'country_id',
		array(
            'name'  => 'country_id',
            'value' => array($model, 'countryFilter'), 
        ),
		'name',
		'name_ar',
		'published',
		'created_at',
		'updated_at',
	),
)); ?>
