<?php
$this->breadcrumbs=array(
	'Mail Inboxes',
);

$this->menu=array(
	array('label'=>Yii::t('MailInbox', 'Create Mail Inbox'),'url'=>array('create')),
	array('label'=>Yii::t('MailInbox', 'Manage Mail Inbox'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mail Inboxes')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
