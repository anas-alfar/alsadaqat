<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Inboxes')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('MailInbox', 'List Mail Inbox'),'url'=>array('index')),
	array('label'=>Yii::t('MailInbox', 'Create Mail Inbox'),'url'=>array('create')),
	array('label'=>Yii::t('MailInbox', 'Update Mail Inbox'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MailInbox', 'Delete Mail Inbox'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('MailInbox', 'Manage Mail Inbox'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailInbox', 'View Mail Inbox')?> #<?php echo $model->id; ?></h1>

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
