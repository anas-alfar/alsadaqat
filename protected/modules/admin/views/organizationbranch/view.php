<?php
$this->breadcrumbs=array(
	'Organization Branches'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List OrganizationBranch','url'=>array('index')),
	array('label'=>'Create OrganizationBranch','url'=>array('create')),
	array('label'=>'Update OrganizationBranch','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationBranch','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationBranch','url'=>array('admin')),
);
?>

<h1>View OrganizationBranch #<?php echo $model->id; ?></h1>

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
		'country_id',
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
