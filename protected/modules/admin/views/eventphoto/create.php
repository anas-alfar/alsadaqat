<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Photos')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('EventPhoto', 'List Event Photo'),'url'=>array('index')),
	array('label'=>Yii::t('EventPhoto', 'Manage Event Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventPhoto', 'Create Event Photo')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>