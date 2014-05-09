<?php
$this->breadcrumbs=array(
	'Mail Types'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List MailType','url'=>array('index')),
	array('label'=>'Create MailType','url'=>array('create')),
	array('label'=>'Update MailType','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MailType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MailType','url'=>array('admin')),
);
?>

<h1>View MailType #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'title',
		'description',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
