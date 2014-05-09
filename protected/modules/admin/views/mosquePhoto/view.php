<?php
$this->breadcrumbs=array(
	'Mosque Photos'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List MosquePhoto','url'=>array('index')),
	array('label'=>'Create MosquePhoto','url'=>array('create')),
	array('label'=>'Update MosquePhoto','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MosquePhoto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MosquePhoto','url'=>array('admin')),
);
?>

<h1>View MosquePhoto #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mosque_id',
		'title',
		'size',
		'source_path',
		'source_url',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
