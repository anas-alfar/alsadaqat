<?php
$this->breadcrumbs=array(
	'Mail Templates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MailTemplate','url'=>array('index')),
	array('label'=>'Create MailTemplate','url'=>array('create')),
	array('label'=>'Update MailTemplate','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MailTemplate','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MailTemplate','url'=>array('admin')),
);
?>

<h1>View MailTemplate #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'mail_type_id',
		'number',
		'from_name',
		'from_department',
		'to_name',
		'to_department',
		'subject',
		'description',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
