<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization User Access Levels')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'List User Access Level'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Create User Access Level'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Update User Access Level'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Delete User Access Level'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Manage User Access Level'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationUserAccessLevel', 'View Organization User Access Level')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'organization_access_level_id',
		'created_at',
		'updated_at',
	),
)); ?>
