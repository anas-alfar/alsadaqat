<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Inboxes')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MailInbox', 'List Mail Inbox'),'url'=>array('index')),
	array('label'=>Yii::t('MailInbox', 'Manage Mail Inbox'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailInbox', 'Create Mail Inbox')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>