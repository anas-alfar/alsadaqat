<?php
$this->breadcrumbs=array(
	'Organization Positions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List OrganizationPosition','url'=>array('index')),
	array('label'=>'Create OrganizationPosition','url'=>array('create')),
	array('label'=>'Update OrganizationPosition','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationPosition','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationPosition','url'=>array('admin')),
);
?>

<h1>View OrganizationPosition #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'title',
		'description',
		'qualifications',
		'responsibilities',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
