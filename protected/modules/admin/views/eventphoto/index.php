<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Photos'),
);

$this->menu=array(
	array('label'=>Yii::t('EventPhoto', 'Create Event Photo'),'url'=>array('create')),
	array('label'=>Yii::t('EventPhoto', 'Manage Event Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Event Photos')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
