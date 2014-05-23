<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Outboxes'),
);

$this->menu=array(
	array('label'=>Yii::t('MailOutbox', 'Create Mail Outbox'),'url'=>array('create')),
	array('label'=>Yii::t('MailOutbox', 'Manage Mail Outbox'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mail Outboxes')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
