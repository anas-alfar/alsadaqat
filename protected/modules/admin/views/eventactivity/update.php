<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Activities')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('EventActivity', 'List Event Activity'),'url'=>array('index')),
	array('label'=>Yii::t('EventActivity', 'Create Event Activity'),'url'=>array('create')),
	array('label'=>Yii::t('EventActivity', 'View Event Activity'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('EventActivity', 'Manage Event Activity'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventActivity', 'Update Event Activity')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>