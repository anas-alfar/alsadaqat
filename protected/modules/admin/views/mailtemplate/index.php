<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Templates'),
);

$this->menu=array(
	array('label'=>Yii::t('MailTemplate', 'Create Mail Template'),'url'=>array('create')),
	array('label'=>Yii::t('MailTemplate', 'Manage Mail Template'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mail Templates')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
