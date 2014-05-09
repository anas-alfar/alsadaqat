<?php
$this->breadcrumbs=array(
	'Organization User Access Levels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrganizationUserAccessLevel','url'=>array('index')),
	array('label'=>'Create OrganizationUserAccessLevel','url'=>array('create')),
	array('label'=>'Update OrganizationUserAccessLevel','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationUserAccessLevel','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationUserAccessLevel','url'=>array('admin')),
);
?>

<h1>View OrganizationUserAccessLevel #<?php echo $model->id; ?></h1>

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
