<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Events')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('Event', 'List Event'),'url'=>array('index')),
	array('label'=>Yii::t('Event', 'Create Event'),'url'=>array('create')),
	array('label'=>Yii::t('Event', 'View Event'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('Event', 'Manage Event'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Event', 'Update Event')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>