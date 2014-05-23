<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Outboxes')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MailOutbox', 'List Mail Outbox'),'url'=>array('index')),
	array('label'=>Yii::t('MailOutbox', 'Create Mail Outbox'),'url'=>array('create')),
	array('label'=>Yii::t('MailOutbox', 'View Mail Outbox'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MailOutbox', 'Manage Mail Outbox'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailOutbox', 'Update Mail Outbox')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>