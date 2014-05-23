<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Cities')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('City', 'List City'),'url'=>array('index')),
	array('label'=>Yii::t('City', 'Manage City'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('City', 'Create City')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>