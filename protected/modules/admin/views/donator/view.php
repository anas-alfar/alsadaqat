<?php
$this->breadcrumbs=array(
	'Donators'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Donator','url'=>array('index')),
	array('label'=>'Create Donator','url'=>array('create')),
	array('label'=>'Update Donator','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Donator','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donator','url'=>array('admin')),
);
?>

<h1>View Donator #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'fullname',
		'ssn',
		'gender',
		'email',
		'date_of_birth',
		'home_phone',
		'work_phone',
		'mobile',
		'nationality_id',
		'organization_id',
		'organization_branch_id',
		'owner_id',
		'personal_photo_path',
		'created_at',
		'updated_at',
		'notes',
		'options',
	),
)); ?>
