<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Activities')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('EventActivity', 'List Event Activity'),'url'=>array('index')),
	array('label'=>Yii::t('EventActivity', 'Manage Event Activity'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventActivity', 'Create Event Activity')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>