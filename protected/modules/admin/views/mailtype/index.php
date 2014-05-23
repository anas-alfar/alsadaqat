<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Types'),
);

$this->menu=array(
	array('label'=>Yii::t('MailType', 'Create Mail Type'),'url'=>array('create')),
	array('label'=>Yii::t('MailType', 'Manage Mail Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Mail Types')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
