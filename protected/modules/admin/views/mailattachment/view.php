<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Attachments')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('MailAttachment', 'List Mail Attachment'),'url'=>array('index')),
	array('label'=>Yii::t('MailAttachment', 'Create Mail Attachment'),'url'=>array('create')),
	array('label'=>Yii::t('MailAttachment', 'Update Mail Attachment'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MailAttachment', 'Delete Mail Attachment'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('MailAttachment', 'Manage Mail Attachment'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailAttachment', 'View Mail Attachment')?> #<?php echo $model->id; ?></h1>

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
