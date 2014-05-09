<?php
$this->breadcrumbs=array(
	'Event Photos'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List EventPhoto','url'=>array('index')),
	array('label'=>'Create EventPhoto','url'=>array('create')),
	array('label'=>'Update EventPhoto','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete EventPhoto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventPhoto','url'=>array('admin')),
);
?>

<h1>View EventPhoto #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'title',
		'size',
		'source_path',
		'source_url',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
