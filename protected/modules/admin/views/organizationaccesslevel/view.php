<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Access Levels')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationAccessLevel', 'List Organization Access Level'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationAccessLevel', 'Create Organization Access Level'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationAccessLevel', 'Update Organization Access Level'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationAccessLevel', 'Delete Organization Access Level'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('OrganizationAccessLevel', 'Manage Organization Access Level'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationAccessLevel', 'View Organization Access Level')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'title',
		'description',
		'created_at',
		'updated_at',
	),
)); ?>
