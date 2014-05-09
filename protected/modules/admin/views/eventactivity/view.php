<?php
$this->breadcrumbs=array(
	'Event Activities'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List EventActivity','url'=>array('index')),
	array('label'=>'Create EventActivity','url'=>array('create')),
	array('label'=>'Update EventActivity','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete EventActivity','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventActivity','url'=>array('admin')),
);
?>

<h1>View EventActivity #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'title',
		'description',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
