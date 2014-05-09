<?php
$this->breadcrumbs=array(
	'Organization Types'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List OrganizationType','url'=>array('index')),
	array('label'=>'Create OrganizationType','url'=>array('create')),
	array('label'=>'Update OrganizationType','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationType','url'=>array('admin')),
);
?>

<h1>View OrganizationType #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'created_at',
		'updated_at',
	),
)); ?>
