<?php
$this->breadcrumbs=array(
	'Event Agendas'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List EventAgenda','url'=>array('index')),
	array('label'=>'Create EventAgenda','url'=>array('create')),
	array('label'=>'Update EventAgenda','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete EventAgenda','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EventAgenda','url'=>array('admin')),
);
?>

<h1>View EventAgenda #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'title',
		'start_time',
		'end_time',
		'venue_name',
		'day_number',
		'created_at',
		'updated_at',
	),
)); ?>
