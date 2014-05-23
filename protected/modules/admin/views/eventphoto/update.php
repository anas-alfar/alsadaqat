<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Photos')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('EventPhoto', 'List Event Photo'),'url'=>array('index')),
	array('label'=>Yii::t('EventPhoto', 'Create Event Photo'),'url'=>array('create')),
	array('label'=>Yii::t('EventPhoto', 'View Event Photo'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('EventPhoto', 'Manage Event Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventPhoto', 'Update Event Photo')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>