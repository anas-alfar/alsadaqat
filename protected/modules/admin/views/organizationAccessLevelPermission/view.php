<?php
$this->breadcrumbs=array(
	'Organization Access Level Permissions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrganizationAccessLevelPermission','url'=>array('index')),
	array('label'=>'Create OrganizationAccessLevelPermission','url'=>array('create')),
	array('label'=>'Update OrganizationAccessLevelPermission','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationAccessLevelPermission','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationAccessLevelPermission','url'=>array('admin')),
);
?>

<h1>View OrganizationAccessLevelPermission #<?php echo $model->id; ?></h1>

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
