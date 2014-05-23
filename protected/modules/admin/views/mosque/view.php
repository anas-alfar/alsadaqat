<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosques')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('Mosque', 'List Mosque'),'url'=>array('index')),
	array('label'=>Yii::t('Mosque', 'Create Mosque'),'url'=>array('create')),
	array('label'=>Yii::t('Mosque', 'Update Mosque'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('Mosque', 'Delete Mosque'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('Mosque', 'Manage Mosque'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Mosque', 'View Mosque')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'contract_date',
		'contract_photo_path',
		'construction_progress',
		'donator_id',
		'agent_id',
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
