<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Types'),
);

$this->menu=array(
	array('label'=>Yii::t('EventType', 'Create Event Type'),'url'=>array('create')),
	array('label'=>Yii::t('EventType', 'Manage Event Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Event Types')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
