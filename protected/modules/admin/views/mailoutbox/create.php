<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Outboxes')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MailOutbox', 'List Mail Outbox'),'url'=>array('index')),
	array('label'=>Yii::t('MailOutbox', 'Manage Mail Outbox'),'url'=>array('admin')),
);
?>

<h1>Create MailOutbox</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>