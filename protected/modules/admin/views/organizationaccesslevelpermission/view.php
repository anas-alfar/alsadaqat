<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Access Level Permissions')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'List Access Level Permission'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Create Access Level Permission'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Update Access Level Permission'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Delete Access Level Permission'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Manage Access Level Permission'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationAccessLevelPermission', 'View Access Level Permission')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_access_level_id',
		'controller_name',
		'action_name',
		'permission',
		'created_at',
		'updated_at',
	),
)); ?>
