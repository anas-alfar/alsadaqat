<?php
$this->breadcrumbs=array(
	'Mail Attachments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MailAttachment','url'=>array('index')),
	array('label'=>'Create MailAttachment','url'=>array('create')),
	array('label'=>'Update MailAttachment','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MailAttachment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MailAttachment','url'=>array('admin')),
);
?>

<h1>View MailAttachment #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mail_id',
		'name',
		'extension',
		'size',
		'source_path',
		'source_url',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
