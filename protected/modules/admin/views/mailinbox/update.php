<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Inboxes')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MailInbox', 'List Mail Inbox'),'url'=>array('index')),
	array('label'=>Yii::t('MailInbox', 'Create Mail Inbox'),'url'=>array('create')),
	array('label'=>Yii::t('MailInbox', 'View Mail Inbox'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MailInbox', 'Manage Mail Inbox'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailInbox', 'Update Mail Inbox')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>