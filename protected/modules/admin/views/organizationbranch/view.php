<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branches')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranch', 'List Organization Branch'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranch', 'Create Organization Branch'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranch', 'Update Organization Branch'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranch', 'Delete Organization Branch'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('OrganizationBranch', 'Manage Organization Branch'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranch', 'View Organization Branch')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'name',
		'description',
		'website',
		'phone',
		'fax',
		'mobile',
		array('name'  => 'country_id','value' => array($model, 'countryFilter')),
		'city_id',
		'adress',
		'manager_id',
		'work_days',
		'work_hours',
		'break_hours',
		'geo_location',
		'is_main_branch',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
