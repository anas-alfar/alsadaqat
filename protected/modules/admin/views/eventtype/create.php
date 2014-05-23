<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Types')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('EventType', 'List Event Type'),'url'=>array('index')),
	array('label'=>Yii::t('EventType', 'Manage Event Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventType', 'Create Event Type')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>