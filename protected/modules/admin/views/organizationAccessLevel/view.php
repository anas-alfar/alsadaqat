<?php
$this->breadcrumbs=array(
	'Organization Access Levels'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List OrganizationAccessLevel','url'=>array('index')),
	array('label'=>'Create OrganizationAccessLevel','url'=>array('create')),
	array('label'=>'Update OrganizationAccessLevel','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationAccessLevel','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationAccessLevel','url'=>array('admin')),
);
?>

<h1>View OrganizationAccessLevel #<?php echo $model->id; ?></h1>

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
