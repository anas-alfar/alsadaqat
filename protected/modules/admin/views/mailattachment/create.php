<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Attachments')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MailAttachment', 'List Mail Attachment'),'url'=>array('index')),
	array('label'=>Yii::t('MailAttachment', 'Manage Mail Attachment'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailAttachment', 'Create Mail Attachment')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>