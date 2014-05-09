<?php
$this->breadcrumbs=array(
	'Mail Outboxes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MailOutbox','url'=>array('index')),
	array('label'=>'Create MailOutbox','url'=>array('create')),
	array('label'=>'Update MailOutbox','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MailOutbox','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MailOutbox','url'=>array('admin')),
);
?>

<h1>View MailOutbox #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'mail_type_id',
		'mail_template_id',
		'number',
		'from_mail',
		'from_name',
		'from_department',
		'to_mail',
		'to_name',
		'to_department',
		'subject',
		'description',
		'send_at',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
