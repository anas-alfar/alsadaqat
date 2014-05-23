<?php
$this->breadcrumbs=array(
	'Mosques'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Mosque','url'=>array('index')),
	array('label'=>'Create Mosque','url'=>array('create')),
	array('label'=>'Update Mosque','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Mosque','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mosque','url'=>array('admin')),
);
?>

<h1>View Mosque #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'contract_date',
		'contract_photo_path',
		'construction_progress',
		'donator_id',
		'agent_id',
		'mosque_type_id',
		array('name'  => 'country_id','value' => array($model, 'countryFilter')),
		'city_id',
		'owner_id',
		'created_at',
		'updated_at',
		'notes',
		'options',
	),
)); ?>
