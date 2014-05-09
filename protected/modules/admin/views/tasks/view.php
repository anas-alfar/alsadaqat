<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Tasks','url'=>array('index')),
	array('label'=>'Create Tasks','url'=>array('create')),
	array('label'=>'Update Tasks','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Tasks','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tasks','url'=>array('admin')),
);
?>

<h1>View Tasks #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'title',
		'description',
		'owner_id',
		'assignee_id',
		'status',
		'start_at',
		'end_at',
		'created_at',
		'updated_at',
	),
)); ?>
