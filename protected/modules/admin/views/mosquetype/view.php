<?php
$this->breadcrumbs=array(
	'Mosque Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MosqueType','url'=>array('index')),
	array('label'=>'Create MosqueType','url'=>array('create')),
	array('label'=>'Update MosqueType','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MosqueType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MosqueType','url'=>array('admin')),
);
?>

<h1>View MosqueType #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'construction_area',
		'construction_cost',
		'construction_time',
		'construction_type',
		'furniture_type',
		'number_of_people',
		'number_of_restrooms',
		'number_of_floors',
		'number_of_entrances',
		'has_female_area',
		'has_sound_system',
		'has_air_condition',
		'agent_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
