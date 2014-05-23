<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Events')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('Event', 'List Event'),'url'=>array('index')),
	array('label'=>Yii::t('Event', 'Manage Event'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Event', 'Create Event')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>