<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Attachments')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MailAttachment', 'List Mail Attachment'),'url'=>array('index')),
	array('label'=>Yii::t('MailAttachment', 'Create Mail Attachment'),'url'=>array('create')),
	array('label'=>Yii::t('MailAttachment', 'View Mail Attachment'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MailAttachment', 'Manage Mail Attachment'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailAttachment', 'Update Mail Attachment')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>