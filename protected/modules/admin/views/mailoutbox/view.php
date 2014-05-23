<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Outboxes')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('MailOutbox', 'List Mail Outbox'),'url'=>array('index')),
	array('label'=>Yii::t('MailOutbox', 'Create Mail Outbox'),'url'=>array('create')),
	array('label'=>Yii::t('MailOutbox', 'Update Mail Outbox'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MailOutbox', 'Delete Mail Outbox'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('MailOutbox', 'Manage Mail Outbox'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailOutbox', 'View Mail Outbox')?> #<?php echo $model->id; ?></h1>

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
