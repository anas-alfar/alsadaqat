<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Attachments'),
);

$this->menu=array(
	array('label'=>Yii::t('MailAttachment', 'Create Mail Attachment'),'url'=>array('create')),
	array('label'=>Yii::t('MailAttachment', 'Manage Mail Attachment'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mail Attachments')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
