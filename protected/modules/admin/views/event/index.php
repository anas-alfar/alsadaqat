<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Events'),
);

$this->menu=array(
	array('label'=>Yii::t('Event', 'Create Event'),'url'=>array('create')),
	array('label'=>Yii::t('Event', 'Manage Event'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Events')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
