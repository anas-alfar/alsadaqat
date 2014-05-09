<?php
$this->breadcrumbs=array(
	'Mail Inboxes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MailInbox','url'=>array('index')),
	array('label'=>'Create MailInbox','url'=>array('create')),
	array('label'=>'Update MailInbox','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MailInbox','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MailInbox','url'=>array('admin')),
);
?>

<h1>View MailInbox #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'mail_type_id',
		'number',
		'from_name',
		'from_department',
		'subject',
		'received_at',
		'owner_id',
		'mail_attachment_id',
		'created_at',
		'updated_at',
	),
)); ?>
