<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Types')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('EventType', 'List Event Type'),'url'=>array('index')),
	array('label'=>Yii::t('EventType', 'Create Event Type'),'url'=>array('create')),
	array('label'=>Yii::t('EventType', 'View Event Type'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('EventType', 'Manage Event Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventType', 'Update Event Type')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>