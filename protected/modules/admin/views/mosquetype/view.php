<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Types')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('MosqueType', 'List Mosque Type'),'url'=>array('index')),
	array('label'=>Yii::t('MosqueType', 'Create Mosque Type'),'url'=>array('create')),
	array('label'=>Yii::t('MosqueType', 'Update Mosque Type'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MosqueType', 'Delete Mosque Type'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('MosqueType', 'Manage Mosque Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueType', 'View Mosque Type')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'construction_area',
		'construction_cost',
		'construction_time',
		'construction_type',
		'furniture_type',
		'number_of_people',
		'number_of_restrooms',
		'number_of_floors',
		'number_of_entrances',
		'has_female_area',
		'has_sound_system',
		'has_air_condition',
		'agent_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
